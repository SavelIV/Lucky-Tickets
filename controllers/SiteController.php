<?php

namespace app\controllers;

use app\models\Count;
use app\models\forms\CountForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionCount()
    {
        $form = new CountForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $model = new Count($form->startInterval, $form->endInterval);

            if ($result = $model->LuckyTickets()) {
                Yii::$app->session->setFlash('success', 'Your Lucky Tickets are counted.' );
            }

            return $this->render('count', [
                'model' => $form,
                'result' => $result,
            ]);
        }


        return $this->render('count', [
            'model' => $form,
        ]);
    }
}

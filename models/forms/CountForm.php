<?php

namespace app\models\forms;

use yii\validators\CompareValidator;
use yii\base\Model;

/**
 * Class CountForm
 * @package app\models\forms
 *
 * @property integer $startInterval
 * @property integer $endInterval
 *
 */

class CountForm extends Model
{

    public $startInterval;
    public $endInterval;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['startInterval', 'endInterval'], 'required'],
            [['startInterval', 'endInterval'], 'integer', 'min' => 100000, 'max' => 999999],
            [
                ['endInterval'],
                CompareValidator::class,
                'compareAttribute' => 'startInterval',
                'operator' => '>',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'startInterval' => 'N - from',
            'endInterval' => 'N - to',
        ];
    }
}

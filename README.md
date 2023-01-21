Готовый проект: http://luckyticket.saviv.site/

Необходимо создать страницу с формой определения количества счастливых
билетов в указанном числовом диапазоне.
Технические требования:

1.Два поля для ввода минимального и максимального значения.

2.Минимальное значение для ввода 100000.

3.Максимальное значение для ввода 999999.

4.Вводить в поле можно только цифры.

5.Данные с формы должны отправляться на сторону скрипта PHP.

6.Расчет должен происходить на стороне скрипта PHP.

7.Счастливым билетом считать комбинацию при которой сумма первых трех
цифр равна сумме последних трех, например, номер билета: 145532: 1 + 4 +
5 = 5 + 3 + 2

8.Отправка данных с формы происходит после нажатия на кнопку “Run”.

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

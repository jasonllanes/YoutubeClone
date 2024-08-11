<?php

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],

];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post'],
    ];
}

echo Nav::widget([
    'options' => ['class' => 'navbar-nav mr-7'],
    'items' => $menuItems,
]);
// if (Yii::$app->user->isGuest) {
//     echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
// } else {
//     echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
//         . Html::submitButton(
//             'Logout (' . Yii::$app->user->identity->username . ')',
//             ['class' => 'btn btn-link logout text-decoration-none']
//         )
//         . Html::endForm();
// }
NavBar::end();
?>
</header>
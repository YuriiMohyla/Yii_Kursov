<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container" style="width: 100%">
        <div class="menu-content centered" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="/">
                    <img class="img" src="/public/images/blog.png" alt="">
                </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="i_con">
                    <div class="nav navbar-nav centered">
                        <?php if(Yii::$app->user->isGuest):?>
                            <a href="<?= Url::toRoute(['auth/login'])?>" class="btn-url">LOGIN</a>
                            <a href="<?= Url::toRoute(['auth/signup'])?>" class="btn-url">REGISTER</a>
                        <?php else: ?>
                            <li><a href="<?= Url::toRoute(['/auth/logout'])?>" class="btn logout">
                                <?= 'Logout (' . Yii::$app->user->identity->name . ')' ?>
                            </a></li>
                        <?php endif;?>
                        <?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin):?>
                            <a href="<?= Url::toRoute(['admin/category'])?>" class="btn-url">Category</a>
                            <a href="<?= Url::toRoute(['admin/article'])?>"  class="btn-url">Article</a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
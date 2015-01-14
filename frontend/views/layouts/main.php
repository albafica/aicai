<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= empty($this->title) ? '爱才网不一样的猎头体验' : Html::encode($this->title); ?></title>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                    <span class="sr-only">爱才网</span>
                </button>
                <a class="navbar-brand" href="#">爱才网</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
                <ul class="nav navbar-nav">           
                    <li class="active"><a href="#fakelink">拍卖自己</a></li>
                    <li><a href="#fakelink">竞拍企业</a></li>
                    <li><a href="#fakelink">招聘入口</a></li>
                </ul>           
            </div>
        </nav>

        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer phone-hidden="">
        <div class="container clearfix">
            <div class="company_info pull-left col-md-4" >
                <h3>极客优才</h3>
                荣誉出品
            </div>
            <div  class="iw_info pull-left col-md-4" >
                <h3>创新工场</h3>
                家族成员
            </div>
            <div class="contact pull-left col-md-4">
                官方微博- <a href="http://weibo.com/jobdeer" target="_blank">@JobDeer</a> <br>
                官方微信- JobDeer<br>
                意见反馈- ping@geekcompany.net<br>
                <a href="http://t.cn/RPGfUeU" target="_blank">使用的开源项目和云服务</a>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

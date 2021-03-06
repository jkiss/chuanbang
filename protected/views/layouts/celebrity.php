<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="穿帮，明星">
    <meta naem="description" content="发现时尚与潮流，揭穿明星的秘密！">
    <title>穿帮v0.1 - Home</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;;?>/styles/noookey.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;;?>/styles/cb.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;;?>/styles/index.css">
    <script src="<?php echo Yii::app()->baseUrl;;?>/scripts/jquery.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;;?>/scripts/jquery.easing.1.3.js"></script>
</head>
<body>
    <!-- The main nav -->
    <nav class="main-nav">
        <ul>
            <li <?php echo $this->id == 'site' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('site/index');?>" class="transition">首页</a>
                <a href="<?php echo Yii::app()->createUrl('site/index');?>" class="icon-home m-nav-icon transition"></a>
            </li>
            <li <?php echo $this->id == 'celebrity' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('celebrity/index');?>" class="transition">名人</a>
                <a href="<?php echo Yii::app()->createUrl('celebrity/index');?>" class="icon-star m-nav-icon transition"></a>
            </li>
            <li <?php echo $this->id == 'brand' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('brand/index');?>" class="transition">品牌</a>
                <a href="<?php echo Yii::app()->createUrl('brand/index');?>" class="icon-brand m-nav-icon transition"></a>
            </li>
            <li <?php echo $this->id == 'topic' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('topic/index');?>" class="transition">话题</a>
                <a href="<?php echo Yii::app()->createUrl('topic/index');?>" class="icon-topic m-nav-icon transition"></a>
            </li>
            <li <?php echo $this->id == 'compare' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('compare/index');?>" class="transition">对比</a>
                <a href="<?php echo Yii::app()->createUrl('compare/index');?>" class="icon-compare-1 m-nav-icon transition"></a>
            </li>
            <li <?php echo $this->id == 'question' ? 'class="active"' : '';?>>
                <a href="<?php echo Yii::app()->createUrl('question/index');?>" class="transition">待答</a>
                <a href="<?php echo Yii::app()->createUrl('question/index');?>" class="icon-wait m-nav-icon transition"></a>
            </li>
            <?php if(Yii::app()->user->isGuest):?>
            <li <?php echo $this->id == 'user' ? 'class="active"' : '';?>>
                <a href="javascript:;" class="login-no transition">用户</a>
                <a href="javascript:;" class="icon-user-1 m-nav-icon login-no transition"></a>
            </li>
            <?php else:?>
                <li <?php echo $this->id == 'user' ? 'class="active"' : '';?>>
                    <a href="<?php echo Yii::app()->createUrl('user/index');?>" class="transition">用户</a>
                    <a href="<?php echo Yii::app()->createUrl('user/index');?>" class="icon-user-1 m-nav-icon transition"></a>
                </li>
            <?php endif;?>
        </ul>
    </nav>
    <!-- The top bar -->
    <header class="header">
        <a href="/">
            <div class="logo">
                <i class="icon-black-star"></i>
            </div>
        </a>
        <div id="search_box">
            <i class="icon-zoom"></i>
            <input type="text" id="keywords" name="keywords" autocomplete="off" placeholder="搜索&nbsp;品牌/明星/话题..." value="<?php echo isset($_GET['word']) && !empty($_GET['word']) ? $_GET['word'] : '';?>" required="required" data-focus="false">
            <div class="search-result">
            </div>
        </div>
        <a href="<?php echo Yii::app()->user->isGuest ? 'javascript:;' : Yii::app()->createUrl('question/ask');?>" class="add-star-outfit transition <?php echo Yii::app()->user->isGuest ? 'login-no' : '';?>">
            <i class="icon-plus"></i>
            添加明星穿搭
        </a>
    </header>
    <!-- The sub nav -->
    <div class="sub-nav-wrap">
        <div class="sub-nav">
            <ul id="b_s_sub">
                <?php if($this->action->id == 'view'):?>
                    <a href="<?php echo Yii::app()->createUrl('celebrity/index');?>">
                        <li <?php echo $this->action->id == 'view' ? 'class="active home transition"' : 'class="home transition"';?>>主页</li>
                    </a>
                <?php else:?>
                    <a href="<?php echo Yii::app()->createUrl('celebrity/view', array('id'=>$this->model['id']));?>">
                        <div class="thumb transition">
                            <div class="img-wrap">
                                <img src="<?php echo $this->model['head'];?>?w=80&h=80" alt="">
                            </div>
                            <p><em>
                                <?php echo $this->model['name_cn'];?><br>
                                <?php echo $this->model['name_en'];?>
                            </em></p>
                        </div>
                    </a>
                <?php endif;?>
                <a href="<?php echo Yii::app()->createUrl('celebrity/fresh', array('id'=>$this->actionParams['id']));?>">
                    <li <?php echo $this->action->id == 'fresh' ? 'class="active transition"' : 'class="transition"';?>>名人动态</li>
                </a>
                <a href="<?php echo Yii::app()->createUrl('celebrity/brands', array('id'=>$this->actionParams['id']));?>">
                    <li <?php echo $this->action->id == 'brands' ? 'class="active transition"' : 'class="transition"';?>>爱穿品牌</li>
                </a>
                <a href="<?php echo Yii::app()->createUrl('celebrity/topics', array('id'=>$this->actionParams['id']));?>">
                    <li <?php echo $this->action->id == 'topics' ? 'class="active transition"' : 'class="transition"';?>>去过活动</li>
                </a>
                <a href="<?php echo Yii::app()->createUrl('celebrity/fans', array('id'=>$this->actionParams['id']));?>">
                    <li <?php echo $this->action->id == 'fans' ? 'class="active transition"' : 'class="transition"';?>>粉丝</li>
                </a>
            </ul>
        </div>
    </div>

    <?php echo $content; ?>

    <!-- To top -->
    <div class="to-top link">
        <i class="icon-dir-up"></i>
    </div>
    <script src="<?php echo Yii::app()->baseUrl;;?>/scripts/cb.js"></script>
</body>
</html>
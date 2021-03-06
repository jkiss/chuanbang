<div class="ui dividing header cb-all">
    全部
    <div class="ui secondary text menu">
        <a href="" class="item active">A</a>

        <a href="" class="item">B</a>

        <a href="" class="item">C</a>

        <a href="" class="item">D</a>

        <a href="" class="item">E</a>

        <a href="" class="item">F</a>

        <a href="" class="item">G</a>

        <a href="" class="item">H</a>

        <a href="" class="item">I</a>

        <a href="" class="item">J</a>

        <a href="" class="item">K</a>

        <a href="" class="item">L</a>

        <a href="" class="item">M</a>

        <a href="" class="item">N</a>

        <a href="" class="item">O</a>

        <a href="" class="item">P</a>

        <a href="" class="item">Q</a>

        <a href="" class="item">R</a>

        <a href="" class="item">S</a>

        <a href="" class="item">T</a>

        <a href="" class="item">U</a>

        <a href="" class="item">V</a>

        <a href="" class="item">W</a>

        <a href="" class="item">X</a>

        <a href="" class="item">Y</a>

        <a href="" class="item">Z</a>

        <a href="" class="item">0-9</a>
    </div>
</div>

<div class="ui tabular menu dividing tiny header cb-tab">
    <a class="active item" data-tab="cb-tabRow1">
        最新发布
    </a>
    <a class="item" data-tab="cb-tabRow2">
        最新评论
    </a>
    <a class="item" data-tab="cb-tabRow3">
        最多收藏
    </a>
</div>
<div class="ui items tab" data-tab="cb-tabRow2"></div>
<div class="ui items tab" data-tab="cb-tabRow3"></div>

<div class="ui items cb-list cb-newList cb-newsList cb-allList tab" data-tab="cb-tabRow1">
    <?php for($i=0, $len=count($stars); $i < $len; $i++):?>
        <?php $star = $stars[$i];?>
        <?php if($i % $size == 0):?><div class="row"><?php endif;?>
        <a class="item cb-itemHover" href="<?php echo Yii::app()->request->baseUrl.'/celebrity/'.$star->id;?>">
            <div class="image">
                <img src="<?php echo $star->head;?>">
            </div>
            <div class="content">
                <h3 class="description"><?php echo $star->name;?></h3>
            </div>
        </a>
        <?php if(($i+1) % $size == 0 || $i == $len-1):?></div><?php endif;?>
    <?php endfor;?>
</div><!--LOGO list-->
<div class="ui active striped progress" id="cb-load">
    <div class="bar cb-bar"></div>
</div>
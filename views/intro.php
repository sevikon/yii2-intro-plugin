<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $index = 0; foreach($items as $item){?>
            <li data-target="#myCarousel" data-slide-to="<?=$index?>" <?=$index==0?'class="active"':''?>></li>
        <?php $index++;} ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <?php $index = 0; foreach($items as $item){?>
            <div class="item <?=$index==0?'active':''?>">
                <div class="intro-carousel">
                    <h4 class="title"><?=$item['title']?></h4>
                    <div class="content"><?=$item['content']?></div>
                </div>
            </div>
            <?php $index++;} ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"><?= Yii::t('frontend', 'Previous')?></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"><?= Yii::t('frontend', 'Next')?></span>
    </a>
</div>
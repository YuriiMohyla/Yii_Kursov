<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>


<div class="main-content">
    <div class="container" style="width: 100%; padding: 0 100px;">
            <div class="col-md-9 content">

            <?php foreach($articles as $article):?>
                    
                <div class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::toRoute(['site/single', 'id'=> $article->id]);?>">
                            <img style="height: 220px" src="<?= $article->getImage();?>" alt="">
                        </a>

                        <a href="<?= Url::toRoute(['site/single', 'id'=> $article->id]);?>" class="post-thumb-overlay text-center">
                            <div class="text-uppercase text-center">View Post</div>
                        </a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h3 class="entry-title"><a href="<?= Url::toRoute(['site/single', 'id'=> $article->id]);?>"><?= $article->title;?></a></h1>
                        </header>
                        <div class="entry-content">
                            <p><?= $article->description;?>
                            </p>
                        </div>
                        <div class="social-share" style="margin-top: 40px;">
                            <span class="social-share-title pull-left text-capitalize">By <?= $article->author->name?> <?= $article->getDate();?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
            </div>
            <div class="col-md-3" data-sticky_column>
                <div class="primary-sidebar">
                    
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <?php foreach($popular as $article):?>

                            <div class="popular-post">


                            <a href="#" class="popular-img"><img src="<?= $article->getImage();?>" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase"><?= $article->title?></a>
                                <span class="p-date"><?= $article->getDate();?></span>

                            </div>
                        </div>
                        <?php endforeach;?>

    
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?php foreach($recent as $article):?>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="recent-img"><img src="<?= $article->getImage();?>" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase"><?= $article->title;?></a>
                                    <span class="p-date"><?= $article->getDate();?></span>
                                </div>
                            </div>
                        </div>
                            
                        <?php endforeach; ?>

                       
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                        <?php foreach($categories as $category):?>
                            <li>
                            <a href="#"><?= $category->title;?></a>
                                <span class="post-count pull-right"> <?= $category->getArticlesCount();?></span>
                        </li>  
                            <?php endforeach; ?>

                                
                        
                        </ul>
                    </aside>
                </div>
            </div>
    </div>
</div>
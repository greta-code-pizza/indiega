<?php
    require('./src/Article.php');
    $data = json_decode(file_get_contents('./article.json'), true);
    $article = new Article($data);
    ob_start();
?>
<!-- PAGE NAME START -->
<section class="page-name parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
    <div class="container">
        <div class="row">
            <h1 class="page-title">
                Blog
            </h1>
            <div class="breadcrumbs">
                <a href="index.php">Indiega</a> /
                <a href="blog.php">Blog</a> 
            </div>
        </div>
    </div>
</section>
<!-- PAGE NAME END -->

<!-- SECTION START -->
<section class="blog-content ptb150 each-element">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-push-2">
                <article class="vertical-item format-thumb fsize-0 clearfix">
                    <div class="item-left-img col-lg-4 col-md-4 col-sm-12 col-xs-12 equal-height">
                        <img src="./assets/images/articles/blog-<?= $article->image ?>" alt="<?= $article->alt ?>">
                    </div>
                    <div class="post-content col-lg-8 col-md-8 col-sm-12 col-xs-12 equal-height">
                        <div class="post-wrapper">
                            <div class="table">
                                <div class="table-row">
                                    <div class="table-cell valign-top">
                                        <div class="platform fsize-14 fweight-700 uppercase">
                                            <?= $article->category; ?>
                                        </div>
                                    </div>
                                    <div class="table-cell valign-top text-right">
                                        <div class="fsize-14 fweight-700 uppercase">
                                            <?= $article->date; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt15">
                                <a href="post.php" class="post-title">
                                    <h5><?= $article->title; ?></h5>
                                </a>
                                <div class="fsize-16 lheight-26 mt15"  data-trim="140">
                                <?= $article->summary(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-bottom table">
                            <div class="table-cell valign-middle">
                                <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                <span class="color-2 fsize-14 ml5">by <?= $article->author; ?></span>
                            </div>
                            <div class="table-cell valign-middle text-right">
                                <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                <span class="color-2 fsize-14 ml5"><?= $article->likes; ?></span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php
  $yield = ob_get_clean();

  $title = "Lorem ipsum blog";
  $description = "Ma super description de la page Blog";
  $active = "blog";

  require("./layout.php");
?>
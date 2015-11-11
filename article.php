<?php theme_include('header'); ?>
<section class="content wrap" id="article-<?php echo article_id(); ?>">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1><?php echo article_title(); ?></h1>
                    <h5>Written by <?php echo article_author(); ?> | <?php echo article_date(); ?></h5>

                    <?php echo article_markdown(); ?>
                  

                        </div>

                    </div>
                </div>
            </div>
    </article>
</section>
<?php theme_include('footer'); ?>

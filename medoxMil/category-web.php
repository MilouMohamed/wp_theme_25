<?php get_header(); ?>

<div class="container home-page page-cat-web">

    <div class="text-center cat-info bg-info">
        <div class="row">
            <div class="col-md-4">
                <h1><?php single_cat_title() ?></h1>
            </div>

            <div class="col-md-4">
                <div class="desc-cat">
                    <?php echo category_description() ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="status">
                    <span>Articles Count : 15</span>
                    <span>Comments Count : 102</span>
                </div>
            </div>
            <div class="col-12">
                <h4>Page speciale pour WEB cate Non classee</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <?php $indx = 0;
            if (have_posts()) {
                while (have_posts()):
                    $indx++;
                    the_post(); ?>
                    <div class="row main-post">
                        <div class="col-md-6">

                            <?php the_post_thumbnail('', [
                                'class' => 'img-responsive thumbnail',
                                'title' => 'img by medox',
                                'data-info' => 'img by medox Milou'
                            ]); ?>
                        </div>

                        <div class="col-md-6">
                            <div>
                                <a href="<?php the_permalink() ?>" class="permalink">
                                    <h4>
                                        <?php
                                        $title = get_the_title();
                                        $short = mb_strimwidth($title, 0, 25, '...');
                                        echo $short . ' N° ' . $indx;
                                        ?>
                                    </h4>
                                </a>
                                <span class="info">
                                    <i class="fa fa-user"></i><?php the_author_posts_link(); ?>
                                    <i class="fa fa-calendar"></i><?php the_time('F j, Y') ?>
                                    <i
                                        class="fa fa-comments"></i><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                                </span>

                                <div class="desc">
                                    <?php the_excerpt(); ?>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="cat">
                                <i class="fa fa-fw fa-tags"></i>
                                <?php the_category(', '); ?>
                            </span>

                            <span class="post-tags">
                                <?php
                                if (has_tag()) {
                                    the_tags('<i class="fa-solid fa-hashtag"></i>');
                                } else {
                                    echo 'Pas de Tag !!!';
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                <?php endwhile;
            } ?>


        </div>
        <div class="col-md-4">
            <div class="side-bar">
                Here Well Be Sidebar ******
            </div>

        </div>

    </div>



    <!-- PAGINATION ICI -->


    <div class="post-pagination">


        <div class="row">
            <div class="col-xs-6  prev">
                <?php
                if (get_previous_posts_link()) {
                    previous_posts_link('<i class="fa-solid fa-chevron-left"></i> Prev');
                } else {
                    echo '<span class="text-muted"><i class="fa-solid fa-chevron-left"></i> Prev</span>';
                }
                ?>
            </div>

            <div class="col-xs-6 text-right next">
                <?php
                if (get_next_posts_link()) {
                    next_posts_link('Next <i class="fa-solid fa-chevron-right"></i>', $wp_query->max_num_pages);
                } else {
                    echo '<span class="text-muted">  Next <i class="fa-solid fa-chevron-right"></i></span>';
                }
                ?>
            </div>
        </div>

    </div>
    <!-- Pagination avce les numeros  -->
    <div class="pagintaion-numbring">
        <?php echo medoxMil_numbring_pagination(); ?>
    </div>

</div>

<?php get_footer(); ?>
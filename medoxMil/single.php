<?php get_header(); ?>

<div class="container   single-post">
    <div class="row">
        <?php $indx = 0;
        if (have_posts()) {
            while (have_posts()) :
                $indx++;
                the_post(); ?>

        <div class="col-xs-12">
            <div class="main-post  ">
                <?php       edit_post_link( '<i class="fa-regular fa-pen-to-square"></i>  Modifer ce Post ',null,null,null,'link-edite-post-1' ) ; ?>
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
                    <i class="fa fa-comments"></i><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                </span>

                <?php the_post_thumbnail('', [
                            'class' => 'img-responsive thumbnail',
                            'title' => 'img by medox',
                            'data-info' => 'img by medox Milou'
                        ]); ?>

                <div class="desc">
                    <?php the_content( ); ?>
                </div>

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

    <!-- PAGINATION ICI -->


    <div class="post-pagination">


        <div class="row">
            <div class="col-xs-6  prev">
                <?php
        if (get_previous_post_link( )) {
           previous_post_link('%link','<i class="fa-solid fa-chevron-left"></i> Prev : %title');
        } else {
            echo '<span class="text-muted"><i class="fa-solid fa-chevron-left"></i> Prev None</span>';
        }
        ?>
            </div>

            <div class="col-xs-6 text-right next">
                <?php
        if (get_next_post_link( )) {
             next_post_link('%link',' Next : %title <i class="fa-solid fa-chevron-right"></i>');;
        } else {
            echo '<span class="text-muted">  Next None <i class="fa-solid fa-chevron-right"></i></span>';
        }
        ?>
            </div>
        </div>

    </div>
<?php comments_template( ); ?>

 <?php
$coments = array( 
    'submit_button' => '  <button name="submit" type="submit" id="submit" class="submit btn btn-primary btn-block"  > %s De medox  </button>  ',
);
comment_form($coments);
?>
</div>

</div>

<?php get_footer(); ?>
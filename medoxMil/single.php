<?php get_header(); ?>

<div class="container   single-post">
    <div class="row">
        <?php $indx = 0;
        if (have_posts()) {
            while (have_posts()):
                $indx++;
                the_post(); ?>

        <div class="col-xs-12">
            <div class="main-post  ">
                <?php edit_post_link('<i class="fa-regular fa-pen-to-square"></i>  Modifer ce Post ', null, null, null, 'link-edite-post-1'); ?>
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
                    <?php the_content(); ?>
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

<!--Start Auteur Ici  --> 
   <div class="row info-author">       
        <div class="col-xs-12  col-md-2"> 
            <?php  
                    $arg_aray=array(
                        'class'=>'img-responsive thumbnail  center-block',
                    );

                 echo    get_avatar(get_the_author_meta( 'ID'),100,'', 'Avatar Med',$arg_aray  )
                ?>
                <hr class="hr-01" />
<p  class=" nbr-pst  text-center">
    <i class="fa-solid fa-paste"></i> : <?php echo   count_user_posts( get_the_author_meta( 'ID' ) )     ?> Posts
</p>
<p  class=" link-pst  text-center">
    <i class="fa-solid fa-user-pen"></i> : <?php       the_author_posts_link(   )    ?>
</p>
        </div>
        <div class="col-xs-12  col-md-10">
            <h4> first_name :
                <?php the_author_meta('first_name');
            the_author_meta('last_name');
            echo '(<span>';
            the_author_meta('nickname');
            echo '</span>)'; ?>
            </h4>
            <p>

                <?php if (get_the_author_meta('description')) {  

                the_author_description(  );
            } else {
                echo '  No  description for this author  (by Medox)';
            }
            ?>
            </p> 


        </div> 
    </div>
<!--End Auteur Ici  -->

    <!-- PAGINATION ICI -->


    <div class="post-pagination">


        <div class="row">
            <div class="col-xs-6  prev">
                <?php
                if (get_previous_post_link()) {
                    previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i> Prev : %title');
                } else {
                    echo '<span class="text-muted"><i class="fa-solid fa-chevron-left"></i> Prev None</span>';
                }
                ?>
            </div>

            <div class="col-xs-6 text-right next">
                <?php
                if (get_next_post_link()) {
                    next_post_link('%link', ' Next : %title <i class="fa-solid fa-chevron-right"></i>');
                    ;
                } else {
                    echo '<span class="text-muted">  Next None <i class="fa-solid fa-chevron-right"></i></span>';
                }
                ?>
            </div>
        </div>
    </div>
    <hr>

 



    <?php comments_template(); ?>

    <?php
    $comments_args = array(
        'label_submit' => 'Publier mon commentaire',
        'submit_button' => '<button name="submit" type="submit" id="submit" class="submit btn btn-primary btn-block">%s De medox</button>',
        'logged_in_as' => null,
        'title_reply' => 'Laisser un commentaire Pour Medox',
        'email_notes' => 'false',
        'comment_notes_before' => '<p class="comment-notes">* champ obligatoir de medox</p>',

    );

    comment_form($comments_args);

    ?>
</div>
 

<?php get_footer(); ?>
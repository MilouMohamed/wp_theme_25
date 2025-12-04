<?php    get_header() ; ?>

<?php     //     echo  get_template_directory_uri();         ?>





<div class="container">
    <div class="row">
        <?php     $indx=0;
            if(have_posts()){

                        while (have_posts()):
                              $indx++;
                            the_post();  ?>
        <div class="col-sm-6 ">
            <div class="  main-post">
                <a href="<?php the_permalink() ?>" class="permalink">
                    <h2> <?php  $title = get_the_title();
$short = mb_strimwidth($title, 0, 25, '...');
echo $short .' N° '. $indx  ?></h2>
                </a>
                <span class="info">
                    <i class="fa fa-user"></i><?php the_author_posts_link(); ?>
                    <i class="fa fa-calendar"></i><?php the_time('F j, Y') ?>
                    <i
                        class="fa fa-comments"></i><?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'cccccccccccmm'); ?>
                </span>
                <?php   the_post_thumbnail('',
                ['class'=>'img-responsive thumbnail',
                'title'=>'img by medox',
                'data-info'=>'img by medox Milou']);   ?>

  <p class="desc">    <?php // the_content('suite >>> ') ?>
 <?php   the_excerpt(); // no img   ?>
</p>

                <span class="cat"> <i class="fa fa-fw fa-tags"></i>
                    <?php the_category(',  '); ?>
                </span>
            </div>
        </div>
        <?php       endwhile;
            
            }
 

?>

    </div>
</div>
<!-- 
<div class="container">
    <div class="row">
          
        <div class="col-sm-6 ">
            <div class="  main-post">
                <h2>This Is Out Main Post Title N° 4</h2>
                <span class="info">
                    <i class="fa fa-user"></i> Admin
                    <i class="fa fa-calendar"></i> 20th Aug, 2025
                    <i class="fa fa-comments"></i> 15 Comments
                </span>
                <img class="img-responsive thumbnail" src="https://dummyimage.com/600x200/000/fff" alt="Pas d'image">
                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem necessitatibus,
                    officiis
                    maxime veniam temporibus dolores autem? Perspiciatis velit corporis exercitationem, quae similique
                    reprehenderit itaque optio ut. Aspernatur, nulla repudiandae?</p>
                <hr />
               
            </div>
        </div>

 
 



    </div>
</div>
 -->
<p>--------------------------------------------</p>




<?php     get_footer();   ?>
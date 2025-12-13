<?php get_header(); ?>
<div class="page_profile_author">



    <div class="container">

        <h1 class="text-center">
            <?php echo get_the_author_meta('nickname')
                ?> Page
        </h1>
        <!-- start row -->
        <div class="row info-glob">
            <div class="col-sm-3">
                <?php
                $arg_aray = array(
                    'class' => 'img-responsive thumbnail  center-block',
                );

                echo get_avatar(get_the_author_meta('ID'), 200, '', 'Avatar Med', $arg_aray)
                    ?>


            </div>
            <div class="col-sm-9 info-p-profile">

                <h4><span> Nom Auteur : </span><?php echo get_the_author_meta('first_name') ?> </h4>

                <h4><span> Prenom :</span> <?php echo get_the_author_meta('last_name') ?> </h4>

                <h4><span> pseud : </span><?php echo get_the_author_meta('nickname') ?> </h4>

                <p>

                    <?php
                    if (get_the_author_meta('description')) {
                        the_author_description();
                    } else {
                        echo ' Pas de Description  (by Medox)';


                    }

                    ?>
                </p>
            </div>



        </div> <!-- End row -->

        <!-- start row -->
        <div class="row   info-status">


            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" nbr-pst  text-center">
                        <i class="fa-solid fa-paste"></i> Posts Count
                        <span>
                            <?php
                            $postsNbr=count_user_posts(get_the_author_meta('ID'));
                            echo  $postsNbr ?>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i> Comments Count
                        <span>
                            <?php
                            $arg_comnt = array(
                                'user_id' => get_the_author_meta('ID'),
                                'count' => true,
                            );
                            echo get_comments($arg_comnt);

                            ?> </span>
                    </p>
                </div>
            </div>

            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i> Total Posts View
                        <span>
                            <?php echo "15" ?> </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i> Testing
                        <span>
                            <?php echo "50" ?> </span>
                    </p>
                </div>
            </div>



        </div>
        <!-- End row -->

        <div class="postes">

            <?php $indx = 0;
$postsNbrPerPage=6;
 $the_query_args=array(
        'author'            => get_the_author_meta( 'ID' ) ,
        'posts_per_page'   => $postsNbrPerPage,  
 );
$the_query=new WP_Query( $the_query_args);



            if ($the_query->have_posts()) { ?>
                <div class="alert alert-info mt-5 text-center">
                    <h2> <?php
                    if( $postsNbr > $postsNbrPerPage) {
                        echo  "Latest ";
 $postsNbr =$postsNbrPerPage;
                    }
else {
      echo  "You Have " ;
}

                     echo " [$postsNbr] Posts of ". get_the_author_meta('nickname')
                        ?>  </h2>
                </div>
                <?php
                while ($the_query->have_posts()):
                    $indx++;
                    $the_query->the_post(); ?>

                    <!-- start row  -->
                    <div class="row">
                        <div class="author-post" >
                            <div class="col-xs-12 col-sm-3  ">
                                <?php the_post_thumbnail('', [
                                    'class' => 'img-responsive  ',
                                    'title' => 'img by medox',
                                    'data-info' => 'img by medox Milou'
                                ]); ?>
                            </div>

                            <div class="col-xs-12 col-sm-9  ">

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
                                    <i class="fa fa-calendar"></i><?php the_time('F j, Y') ?>
                                    <i
                                        class="fa fa-comments"></i><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                                </span>

                                <div class="desc">
                                    <?php the_excerpt(); ?>
                                </div>

                            </div>
                        </div> 
                    </div> <!-- end row  -->

                <?php endwhile;
            } else { ?>
                <div class="alert alert-danger text-center">
                    <h2> Pas de Post</h2>
                </div>
            <?php } ?>
<!-- /* Restore original Post Data */ -->
 <?php  wp_reset_postdata(); ?>
        </div> <!-- end .postes  -->



<!-- Start Commenatires  -->
<div class="comments">
    
<div class="row">
 <?php  
 $nbrCmnt=4;

 $comnts_this_auth_args=array(
'user_id'           => get_the_author_meta( 'ID' ),
'status'            => 'approve',
'post_status'       => 'publish',
'post_type'         => 'post',
'number'            => $nbrCmnt 
 );
 
$cmnts=get_comments( $comnts_this_auth_args );


if($cmnts){


foreach($cmnts as $cmt){  ?>

<div class="col-md-4 ">
<div class=" row-cmnt">


<!-- // echo "  ___ ". $cmt->comment_post_ID;  -->
<a href="<?php  echo get_permalink( $cmt->comment_post_ID )    ?>"> 
<?php  echo get_the_title( $cmt->comment_post_ID )    ?> 
</a>

<span>
  <i class="fa fa-calendar"></i>  added on  <?php  echo  mysql2date( 'l, F j, Y',   $cmt->comment_date )  ?> 
</span>
<span>
    <?php  echo   $cmt->comment_content  ?> 
</span>


</div>
</div>


 <?php  
} //end foreach 
}else { ?>
<div class=" row-cmnt">
This Author Dont Have Any Comments
</div>

<?php  
}
 ?>




</div>
</div> 
<!-- End  Commenatires  -->







    </div>
    <!-- End container -->

 


</div>






<?php get_footer(); ?>
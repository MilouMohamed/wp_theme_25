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

                <h4> Nom Auteur : <?php echo get_the_author_meta('first_name') ?> </h4>

                <h4> Prenom : <?php echo get_the_author_meta('last_name') ?> </h4>

                <h4> pseud : <?php echo get_the_author_meta('nickname') ?> </h4>

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
        <div class="row info-status">
            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" nbr-pst  text-center">
                        <i class="fa-solid fa-paste"></i> Nbr articles (Postes)
                        <span>
                            <?php echo count_user_posts(get_the_author_meta('ID')) ?>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i> Commentaires
                        <span>
                            <?php comments_popup_link(
                                '0',
                                '1',
                                ' %   ',

                            );
                            ?> </span>
                    </p>
                </div>
            </div>

            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i>
                        <span>
                            <?php echo "15" ?> </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3  ">
                <div class="  statu">
                    <p class=" text-center">
                        <i class="fa fa-comments"></i>
                        <span>
                            <?php echo "50" ?> </span>
                    </p>
                </div>
            </div>



        </div>
        <!-- End row -->




    </div>










</div>






<?php get_footer(); ?>
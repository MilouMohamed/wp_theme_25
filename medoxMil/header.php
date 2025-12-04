<!DOCTYPE html>
<html <?php  language_attributes();  ?>>

<head>
    <meta charset="<?php  bloginfo('charset');   ?>" />
    <title> <?php   bloginfo('name')   ?> </title>
    <link rel="pingback" href="<?php  bloginfo('pingback_url')   ?>" />

    <?php wp_head() ;?>
</head>

<?php  //  get_header()   ?>

<body style="padding-top: 50px;">
    <!-- OU ICI -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container ">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php   medoxMil_bootstrap_menu();  ?>

            </div>

        </div>
    </nav>
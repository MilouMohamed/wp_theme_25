<?php

// Nmobre de commentaires dans la catégorie Web
$com_args = array(
    'status' => 'approve',

);
$count_cmnt = 0;

$all_cmnts = get_comments($com_args);

foreach ($all_cmnts as $cmnt) {
    $post_id = $cmnt->comment_post_ID;

    if (in_category("web", $post_id)) {
        $count_cmnt++;
    }
}


// nombre d'articles dans la catégorie Web
$cat=get_queried_object(  );

$count_posts= $cat->category_count; 

?>

<div class="sidebar-web">
    <div class="wedget-elemn">
        <h4 class="wedget-title"> <?php single_cat_title() ?> Statistics </h4>
        <div class="wedget-content">
            <ul>
                <li>
                    <span>Coments Counts : </span> <?php echo $count_cmnt ?>
                </li>
                <li>
                    <span>Articles Counts : </span>  <?php echo $count_posts ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="wedget-elemn">
        <h4 class="wedget-title">Web Sidebar 2</h4>
        <div class="wedget-content">
            <p>This is the sidebar for Web Category</p>
        </div>
    </div>

    <div class="wedget-elemn">
        <h4 class="wedget-title">Web Sidebar 3</h4>
        <div class="wedget-content">
            <p>This is the sidebar for Web Category</p>
        </div>
    </div>



</div>
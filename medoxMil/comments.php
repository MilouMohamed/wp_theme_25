<?php
echo '<h3 class="comments-number" > ';
comments_number('Pas de CMNT', 'Un CMNT', '% CMNTs');
echo '</h3>';

if (comments_open()) {



   echo '<ul  class="list-unstyled  our-comments-liste" > ';


   $param_cmnts = array(
      'max_depth' => 3,
      'type' => 'comment',
      'avatar_size' => 50,

   );
   wp_list_comments($param_cmnts);


   foreach ($comments as $comment) {

      // comment_author(  ); // LES auteurs

   }
   echo '</ul> ';

} else {
   echo 'Comments Close';
}




?>
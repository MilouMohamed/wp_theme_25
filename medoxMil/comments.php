<?php
 
if(comments_open(  )){
echo 'Comments Open';
   wp_list_comments( );


foreach($comments as $comment){

comment_author(  );

}


}else{
echo 'Comments Close';
}
  



?>
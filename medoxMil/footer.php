
<div class="footer text-center">
    Milou Med &copy; 
    
    <?php       if(date('Y') > 2025 ){
echo  '2025  - '.date('Y') ;

    }   else{
        echo  '2025  '  ;
    }  ?>
    My ferste WordPress Theme  [<?php     bloginfo( 'name' )   ?>]
    
</div>


<?php    wp_footer() ;  ?>

        </body>
</html>
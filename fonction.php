<?php  

function affiche_menu($menu){
    foreach($menu as $key => $value){
        echo '<li>' .$value. '</li>';
    }
}
?>
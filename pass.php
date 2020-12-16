<?php 
    
$tab=[];
$tab1=[];
$tab2=[];
$x=0;
while($x < 10){
    $tab[] = rand(0,100);
    $x++;        
}
foreach($tab as $x){
    if($x < 50){
        $tab1[] = $x;
    }else{
        $tab2[] = $x;
    }
}

echo " Tableau 1 : \n";
foreach($tab1 as $v){
    echo "- $v \n";
}

echo " Tableau 2 : \n";
foreach($tab2 as $p){
    echo "- $p \n";
}






?>
<?php
$T=$_GET["type"];
$T();


function check_cake_cat()
{
    include_once "cake.php";
    $cake1=new cake();
    $cake_list=$cake1->get_cake_by_cat($_GET['cat']);
    echo json_encode($cake_list);
}


function getallcake()
{
    include_once "cake.php";
    $cake1=new cake();
    $cake_list=$cake1->get_all_cake();
    echo json_encode($cake_list);
}

?>
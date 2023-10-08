<?php


require_once "vendor/autoload.php";
use App\classes\Home;

include_once "pages/templates-parts/header.php";
if ('home' == $_GET['page']){
    $allStudents =  (new Home())->getAllStudents();
    include_once "pages/home.php";
}elseif ('students-details' == $_GET['page']){
    include_once "pages/student-details.php";
}
include_once "pages/templates-parts/footer.php";
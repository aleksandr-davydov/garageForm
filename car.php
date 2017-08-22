<?php
require_once ("newGarage.php");
if(isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["model"]) && !empty($_POST["model"])){
    $nameCar = $_POST["name"];
    $modelCar = $_POST["model"];

}else{
    echo "Fill all blank";
}
print_r($all);

//$cars ["$nameCar"] = ["$modelCar" => ['color' => 'pink', 'year' => '2011']];
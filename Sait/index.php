<?php
    require_once "vendor/autoload.php";
    Twig_Autoloader::register();

    $loader =new Twig_Loader_Filesystem("templates");
    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate("index.html");

$Last_Rates_Arr = array(
    array( 'Sum' => '3,00','Event' => 'Тер-Штеген ГП 1','Result' => '-12,00',),
    array( 'Sum' => '4,00','Event' => 'Месси Г 2+','Result' => '+16,00',),
    array( 'Sum' => '5,00','Event' => 'Барселона 3:1','Result' => '+10,00',)
);

    $Balance ="+23.00";
    $Account_Num ="+1408231006";
    $Name ="Звериное Мессиво";

    echo $template->render(array(
        'Last_Rates_Arr' => $Last_Rates_Arr, 'Balance' => $Balance,'Account_Num' => $Account_Num,'Name' => $Name
    ));
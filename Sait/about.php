<?php
require_once "vendor/autoload.php";
Twig_Autoloader::register();

$loader =new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate("about.html");

$pagename = "БУКМЕКЕРСКАЯ КОМПАНИЯ BARCABET";
$Main_Info= "Букмекерская компания BarcaBet предлагает ставки связанные с ФК Барселона. Поймай удачу вместе с BarcaBet";

$Info_Arr = array(
    array( 'Info_Name' => 'ВИДЫ И ВАРИАНТЫ СТАВОК',
            'Info' => 'Букмекерская компания BarcaBet предоставляет большое количество ставок на конкретное событие:
                    точный счёт, больше/меньше, какая команда забьёт
                    первый гол и т.п. Выбор ставок на каждый матч достаточно велик.'),
    array( 'Info_Name' => 'СТАВКИ LIVE',
            'Info' => 'Ставки на события доступны 24 часа в сутки. Для ставок, по большинству спортивных событий,
                    предоставляется на выбор более 30 маркетов, в том числе количество угловых, желтых карточек, штрафных бросков и т.д.')
);

echo $template->render(array(
    'pagename' => $pagename, 'Main_Info' => $Main_Info, 'Info_Arr' => $Info_Arr
));
<?php
require_once "vendor/autoload.php";
Twig_Autoloader::register();

$loader =new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate("contacts.html");

$TabName = "Электронные адреса";

$Info_Arr = array("Общие вопросы:","Техническая поддержка:","Вопросы партнёрства:","Финансовый отдел:",
    "Главный сотрудник по информационной безопасности:","Сотрудник по политике конфиденциальности:");

echo $template->render(array(
    'TabName' => $TabName, 'Info_Arr' => $Info_Arr));
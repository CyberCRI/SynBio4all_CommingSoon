<?php

function display_page() {
    require "./model/BD.php";
    require_once "./model/M_Lang.php";
    require "./model/M_Post.php";
    $selectedLang = M_Lang::readLang();
    M_Lang::init();
    $database = new DB();
    $listLang = M_Lang::getAllLang($database);
    $contents = M_Post::getPost($database, $selectedLang);
    require "./view/common/base.php";
}

function submitMail() {
    require "./model/BD.php";
    require "./model/M_Mail.php";
    $database = new DB();
    $mail = new M_Mail($_POST["dataField"]);
    if ($mail->isInDatabase($database)) {
        $GLOBALS['error'] = "This mail address is already used";
    } else {
        $mail->write($database);
        $GLOBALS['success'] = "Registred !";
    }
    display_page();
}

function updateLanguage() {
    require "./model/BD.php";
    require "./model/M_Lang.php";
    require "./model/M_Post.php";
    $database = new DB();
    M_Lang::changeLang($_POST["language"]);
    $selectedLang = M_Lang::currentLang();
    $listLang = M_Lang::getAllLang($database);
    $contents = M_Post::getPost($database, $selectedLang);
    require "./view/common/base.php";
}
?>
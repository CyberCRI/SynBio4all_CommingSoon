<?php

class M_Lang {

    private static $_selectedLang;
    private $_designation;
    private $_name;

    //constructor
    public function __construct($designation, $name) {
        $this->_designation = $designation;
        $this->_name = $name;
    }

    public function getDes() {
        return $this->_designation;
    }

    public function getName() {
        return $this->_name;
    }

    public static function init() {
        if ($_COOKIE["languageDes"] != "EN" || $_COOKIE["languageDes"] != "FR") {
            self::changeLang("EN");
        }
    }

    public static function readLang() {
        self::$_selectedLang = $_COOKIE["languageDes"];
        return self::$_selectedLang;
    }

    public static function currentLang() {
        return self::$_selectedLang;
    }

    public static function changeLang($lang) {
        setcookie("languageDes", $lang);
        self::$_selectedLang = $lang;
    }

    public static function getAllLang($database) {
        $request = "SELECT * FROM lang;";
        $res = $database->sqlQuery($request);
        return M_Lang::resToObject($res);
    }

    //convert resource to object
    private static function resToObject($res) {
        if (!$res) {
            die('Echec SQL');
        }
        while ($langData = pg_fetch_array($res)) {
            $langArray[] = new M_Lang($langData["designation"], $langData["name"]);
        }
        if (isset($langArray[0])) {
            return $langArray;
        }
    }

}

?>

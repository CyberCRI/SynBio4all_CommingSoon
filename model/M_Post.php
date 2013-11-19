<?php
class M_Post {
    private $_id;
    private $_name;
    private $_data;
    private $_lang_id;
    
    //constructor
    public function __construct($id, $name, $data, $lang_id) {
        $this->_id=$id;
        $this->_name=$name;
        $this->_data=$data;
        $this->_lang_id=$lang_id;
    }

    //return the data of the post
    public function getData(){
        return $this->_data;
    }
    
    //return the title of the post
    public function getTitle(){
        return $this->_name;
    }
    
    public static function getPost($database, $lang){
        $request = sprintf("SELECT * FROM post WHERE langdesignation = '%s';", pg_escape_string($lang));
        $res=$database->sqlQuery($request);
        return M_Post::resToObject($res);
    }

    //convert resource to object
    private static function resToObject($res){
        if (!$res) {
                die('Echec SQL');
        }
        while($postData = pg_fetch_array ($res)){
               $postArray[]= new M_Post($postData["id"],
                                        $postData["name"], 
                                        $postData["data"],
                                        $postData["lang_designation"]);
        }
        if(isset($postArray[0])){
                return $postArray;
        }
    }
}
?>

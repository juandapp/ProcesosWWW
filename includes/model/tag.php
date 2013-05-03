<?php

class Tag {

    private $idTag;
    private $name;
    private $creation_date;

    public function __construct($name = "") {
        $this->name = $name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public static function autoCompleteName($name) {
        global $database;
        $result_set = $database->query("SELECT * FROM tag WHERE name LIKE '{$name}%' ");
        $tag_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $tag_array[] = $row["name"];
        }
        return json_encode($tag_array);
        //return !empty($tag_array) ? convert_to_json($tag_array) : false;
    }
    
    private function convert_to_json($tag_array){
        $json = "{";
        foreach ($tag_array as $tag){
            $json.= "\"name : \"". "\"".$tag->name."\"";
        }
        $json.="}";
        return $json;
    }

    public function save() {
        global $database;
        $sql = "INSERT INTO user (name , last_name, email, username, password) VALUES ";
        $sql .= "('" . $this->name . "','" . $this->last_name . "','" . $this->email . "','" . $this->username . "','" . $this->password . "')";
        $result_set = $database->query($sql);
    }

    public static function authenticate($username = "", $password = "") {
        global $database;
        $username = $database->escape_value($username);
        $password = $database->escape_value($password);

        $sql = "SELECT * FROM user ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_name($id = 0) {
        $result_array = self::find_by_sql("SELECT * FROM user WHERE idUser={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql = "") {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    private static function instantiate($record) {
        // Could check that $record exists and is an array
        $object = new self;
        foreach ($record as $attribute => $value) {
            if ($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private function has_attribute($attribute) {
        $object_vars = get_object_vars($this);
        // We don't care about the value, we just want to know if the key exists
        // Will return true or false
        return array_key_exists($attribute, $object_vars);
    }

}

?>

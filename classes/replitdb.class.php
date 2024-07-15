<?php

/**
 * Repl.it DB Logic
 * @author Channing Babb <channingbabb@gmail.com>
*/

class ReplDB {

    public $REPL_DB_URL;

    public function REPL_DB_URL() {
      return getenv('REPLIT_DB_URL');
    }

  public function setKey($keyname, $data, $isArray = true) {
    if ((isset($keyname)) && (!empty($keyname)) && (isset($data)) && (!empty($data))){

    // serialize the data so that it's in one key
    // if you do an array, it will make a key for each value
    $data = array($keyname => serialize($data));

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($this->REPL_DB_URL(), false, $context);
    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
    } else {
      return "You must set a keyname and have data. Syntax: setKey($keyname, $data, array(true, false)";
    }
  }

  public function getKey($keyname) {
    if ((isset($keyname)) && (!empty($keyname))){
      return unserialize(file_get_contents($this->REPL_DB_URL() . '/' . $keyname));
    }
  }

  public function delKey($keyname) {
    if ((isset($keyname)) && (!empty($keyname))){
      return file_get_contents($this->REPL_DB_URL() . '/' . $keyname, false, stream_context_create(array('http' => array('method' => 'DELETE'))));
    }
  }

  public function keyExists($keyName) {
    if (trim($this->getKey($keyName)) !== "") {
      return true;
    } else {
      return false;
    }
  }

  public function listKeys($inArray) {
    $keysRaw = file_get_contents($this->REPL_DB_URL() . '?prefix');
    $keyList = explode("\n", $keysRaw);
    $keys = array();
    if ($inArray = true) {
      $keyArray = array();
      foreach ($keyList as $key) {
        array_push($keyArray, $key);
      }
      return $keyArray;
    } else {
      foreach ($keyList as $key) {
        echo $key;
      }
    }
  }

  public function listKeysData($inArray) {
    $keysRaw = file_get_contents($this->REPL_DB_URL() . '?prefix');
    $keyList = explode("\n", $keysRaw);
    $keys = array();
    if ($inArray = true) {
      $keyArray = array();
      foreach ($keyList as $key) {
        array_push($keyArray, getKey($key));
      }
      return $keyArray;
    } else {
      foreach ($keyList as $key) {
        print_r(getKey($key));
      }
    }
  }

  public function deleteAllKeys() {
    $keysRaw = file_get_contents($this->REPL_DB_URL() . '?prefix');
    $keyList = explode("\n", $keysRaw);
    foreach ($keyList as $key) {
      $this->delKey($key);
      echo "Deleted ".$key;
    }
  }

}

?>
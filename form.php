<?php

class form(){

public $data;
public $surround='p';

public function __construct($data = array()){
    $this->data = $data;
} 

public function getvalue($index){
    return isset ($this->data[$index]) ? $this->data[$index]:null;
}
public function input ($name){
    return $this->surround ('<input type="text" name="' .$name.'"value="'.$this->getvalue($name).'">' );
}

public function surround($html){
return "<{$this->surround}>{$html}</{$this->surround}>" ;
}


public function submit(){
    echo '<button type="submit">Envoyer</button>' ;
}

}

?>
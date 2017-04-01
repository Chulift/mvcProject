<?php
class View(){
  function __construct(){

  }
  public function render($url = "view/index.php"){
    require "view/$url";
  }
}
?>

<?php
class View{
  function __construct(){

  }
  public function render($url = "view/index.php"){
    if ($url == "") {
      # code...
      require "public/view/login.php";
    }else
    require "public/view/$url.php";
  }
}
?>

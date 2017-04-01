<?php
class main_controller{
  public function __construct(){
      $this->view = new View();

      $base_url = $this->getCurrentUri();
    	$routes = array();
    	$routes = explode('/', $base_url);
    	foreach($routes as $route)
    	{
    		if(trim($route) != '')
    			array_push($routes, $route);
    	}
      $this->view->render($routes[1]);
    	/*
    	Now, $routes will contain all the routes. $routes[0] will correspond to first route. For e.g. in above example $routes[0] is search, $routes[1] is book and $routes[2] is fitzgerald
    	*/

  }
  function getCurrentUri()
  {
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    return $uri;
  }
}
?>

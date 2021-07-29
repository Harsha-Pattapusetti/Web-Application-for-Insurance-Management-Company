 <?php
  ob_start(); // output buffering is turned on

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("DESIGN_PATH", PRIVATE_PATH . '/design');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_WDS", '');
  // * Can dynamically find everything in URL up to "/public"
  
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_WDS", $doc_root);

  require_once('Functions.php');
  /* require_once('Database.php');  */
  

/*   $db = db_connect(); */ 

?>

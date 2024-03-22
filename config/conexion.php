<?php

require_once ("config.php");

$db = new mysqli (HOST, USUARIO, PASS);
        
if ($db -> connect_error) {
    die ("FATAL ERROR " . $db -> connect_error);
}
        
echo "hola hola";
             

?>
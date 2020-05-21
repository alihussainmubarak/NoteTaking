<?php 

function autoload($class) {
  include '../classes/' . $class . '-class.php';
}

spl_autoload_register('autoload');

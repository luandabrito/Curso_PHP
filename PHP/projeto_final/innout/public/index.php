<?php

require_once (dirname(__FILE__, 2) . '/src/config/config.php');
require_once (dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Maria', 'email' => 'maria@maria.com']);

echo $user->getSelect(['name' => 'Chaves'], 'name, email');

?>
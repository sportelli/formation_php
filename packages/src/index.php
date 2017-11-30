<?php
namespace FormationPHP;

use FormationPHP\view\IndexView;

require_once __DIR__.'/../vendor/autoload.php';

$p = new IndexView();
$p->getUserById(2);
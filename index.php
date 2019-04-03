<?php

require 'Name.php';
require 'functions.php';

$pdo = connectToDb();

$names = fetchAllNames($pdo);


require 'index.view.php';

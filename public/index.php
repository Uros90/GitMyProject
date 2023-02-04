<?php
declare(strict_types = 1);

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);





$absolute_path = realpath("index.php");
$absolute_path1 = dirname(__DIR__).DIRECTORY_SEPARATOR;


/* $test_path = file_build_path("home", "alice", "Documents", "example.txt"); */
if(function_exists('file_build_path'))
    $test_path = file_build_path("home", "alice", "Documents", "example.txt");
else
    $test_path = 'ne postoji';


    echo "<pre>";
        print_r ($root);
        echo "<br>";
        print_r ($absolute_path1);
        echo "<br>";
        print_r (__DIR__);
        echo "<br>";
        print_r (dirname(__DIR__).DIRECTORY_SEPARATOR);
        echo "<br>";
        print_r (DIRECTORY_SEPARATOR);
    echo "</pre>";
    exit();

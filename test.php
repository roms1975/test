<?php
    
    require_once(__DIR__ . "/method.php");

    if (empty($argv[1])) {
        echo "Введите строку\n";
	exit;
    }

    $result = revertCharacters($argv[1]);
    echo $result . "\n";

?>
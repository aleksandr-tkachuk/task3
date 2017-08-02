<?php

include_once './libs/fgets.php';

$fileName = '/home/alex/projects/PHP/task3_file/test';
$fileProcessor = new Fgets($fileName);
$stringToReplace = " ---Replacement string--- ";  
$charToReplace = '卍';

include_once 'templates/index.php';
$fileProcessor->close();


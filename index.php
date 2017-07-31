<?php

include_once './libs/fgets.php';

$fileName = '/home/alex/projects/PHP/task3_file/test';
$fileProcessor = new Fgets($fileName);
$length = 2; #Указываем сколько строк/сколько символов надо прочесть
$offset = " ---Replacement string--- "; #Указываем с какой строки/с какого символа начинаем читать  

//echo $allContent = $fileProcessor->readGets(-1).'<br><br>';
//echo $allContent.'<br>';




//---string replace (char/symbol)
//$fileProcessor->strReplace(1,$offset);


//---------------
//echo $fileProcessor->readGets(3,$offset).'<br>';
include_once 'templates/index.php';
$fileProcessor->close();


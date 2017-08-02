<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template 3</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
    <div class="panel panel-default">
        <h3>File Conetnt:</h3>
        <div class="panel-heading">
            <?=nl2br($fileProcessor->readGets(-1))?>
        </div>

        <h3>Get 4th string</h3>
        <div class="panel-heading">
           <?=nl2br($fileProcessor->readGets(1, 3))?> 
        </div>

        <h3>Get 4th symbol</h3>
        <div class="panel-heading">
           <?=nl2br($fileProcessor->readGetc(1, 3))?> 
        </div>

        <h3>Replace 6th text line</h3>
        <h4 style=" color: red">file before:</h4>
        <div class="panel-heading">
        <?=nl2br($fileProcessor->readGets(-1))?> 
        </div>
        <?php $fileProcessor->strReplace(6, $stringToReplace)?>
        <h4 style=" color: red">file after:</h4>
        <div class="panel-heading">
        <?=nl2br($fileProcessor->readGets(-1))?>
        </div>

        <h3>Replace 6th symbol</h3>
        <h4 style=" color: red">file before:</h4>
        <div class="panel-heading">
           <?=nl2br($fileProcessor->readGets(-1))?>  
        </div>
        <?php $fileProcessor->chrReplace(6, $charToReplace)?>
        <h4 style=" color: red">file after:</h4>
        <div class="panel-heading">
            <?=nl2br($fileProcessor->readGets(-1))?>  
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html> 

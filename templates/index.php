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
    <div>
        <h3>File Conetnt:</h3>
        <div>
            <?=$fileProcessor->readGets(-1);?>
        </div>
    </div>
    <div>
        <h3>Get 4th string</h3>
        <div>
           <?=$fileProcessor->readGets(4);?> 
        </div>
    </div>
    <div>
        <h3>Get 4th symbol</h3>
        <div>
           <?=$fileProcessor->readGetc(4);?> 
        </div>
    </div>
    <div>
        <h3>replace 6th text line</h3>
        <div>
            <h5>file before:</h5>
            <div>
               <?=$fileProcessor->readGets(-1);?> 
            </div>
            <h5>file after:</h5>
            <div>
                <?php
                $fStr = $fileProcessor->strReplace(6,$offset);
                //$fileProcessor->readGets(-1);
                ?>
            </div>
            
        </div>
    </div>
        <div>
        <h3>replace 8th symbol</h3>
        <div>
            <h5>file before:</h5>
            <div>
               <?=$fileProcessor->readGets(-1);?>  
            </div>
            <h5>file after:</h5>
            <div>
                <?php
                $fChr = $fileProcessor->chrReplace(8,$offset);
                echo $fChr;
                //$fileProcessor->readGets(-1);
                ?>
            </div>
            
        </div>
    </div>
    

        
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html> 

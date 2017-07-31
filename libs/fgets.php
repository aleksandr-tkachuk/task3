<?php

class Fgets {

    protected $fhandler = null;

    public function __construct($filename) {

        if (!($this->fhandler = fopen($filename, "a+"))) {
            throw new Exception("Cannot open the file");
        }

    }

    public function readGets($length = 10, $offset = 0) {
        
        if (!$this->fhandler) {
            throw new Exception("Invalid file pointer");
        }
        
        rewind($this->fhandler);
        
        $counter = 0;
        $result = '';
        while (!feof($this->fhandler)) {
            $line = fgets($this->fhandler);
            if($counter++ >= $offset) {
                $result .= $line. PHP_EOL;
            }
            if ($counter > $offset + $length && $length !== -1)                
                break;
        }
        return $result;
    }

    public function readGetc($length = 10, $offset = 0) {

        if (!$this->fhandler) {
            throw new Exception("Invalid file pointer");
            
        }
        rewind($this->fhandler);
        $result = "";
        $counter = 0;
        //echo $this->fhandler, $offset;
        fseek($this->fhandler, $offset);
        while (!feof($this->fhandler) && ($length > $counter++ || $length === -1)) {
            $result .= fgetc($this->fhandler);

        }
        return $result;
    }
    
    public function strReplace($idx, $str) {
        
        $res = $this->readGets($idx -1);
        echo $res."<br>";
        $res .= $str;
        echo $res."<br>";
        $res .= $this->readGets(-1, $idx);
        //return $res;
        echo $res."<br>";
        //$this->save($res);
    }

    public function chrReplace($idx, $str){
        
        $res = $this->readGetc($idx -1);
        //echo $res."<br>";
        $res .= $str;
        //echo $res."<br>";
        $res .= $this->readGetc(-1, $idx);
        //echo $res."<br>";
        return $res;
        //$this->save($res);
    }
    
    private function save($res){
        
        ftruncate($this->fhandler, 0);
        fwrite($this->fhandler, $res); 
    }
    
    public function close() {
        
        fclose($this->fhandler);
    }
}

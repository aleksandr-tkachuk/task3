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
                $result .= $line;
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
        fseek($this->fhandler, $offset);
        while (!feof($this->fhandler) && ($length > $counter++ || $length === -1)) {
            $result .= fgetc($this->fhandler);

        }
        return $result;
    }
    
    public function strReplace($idx, $str) {
        
        $res = $this->readGets($idx - 2);
        $res .= $str . PHP_EOL;
        $res .= $this->readGets(-1, $idx); 
        $this->save($res);
    }

    public function chrReplace($idx, $str){
        
        $res = $this->readGetc($idx);
        $res .= $str;
        $res .= $this->readGetc(-1, $idx +1); 
        $this->save($res);
    }
    
    private function save($res){
        
        ftruncate($this->fhandler, 0);
        fwrite($this->fhandler, $res); 
    }
    
    public function close() {
        
        fclose($this->fhandler);
    }
}

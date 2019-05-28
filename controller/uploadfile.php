<?php

class Uploadfile{
    
    function getfilename($imgusuarioname, $idusuario){        
        $arrfile=pathinfo($imgusuarioname);
        $sArchivo=$idusuario.".".$arrfile["extension"];
        return $sArchivo;        
    }
    
    function getrealfilename(){
        
    }
    
}



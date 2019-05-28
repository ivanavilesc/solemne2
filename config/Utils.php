<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author Ivan Aviles
 */
class Utils {
    
    public function getURL(){
        $host  = $_SERVER['HTTP_HOST'];
        $host_upper = strtoupper($host);
        $path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $baseurl = "http://" . $host . $path;
        return $baseurl;
        
    }
}

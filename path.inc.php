<?php
  
    function getPath($full = true, $file = false){
        
        $path = urldecode($_SERVER['REQUEST_URI']);     
        if (_SCRIPTPATH_ != null) {
            $path = str_replace(_SCRIPTPATH_, '', $path);
        }
        $path = explode('/', $path);
        if ($full){
            if (strpos($path[sizeof($path)-1], '.') > -1){
                if ($file){
                    return $path;
                }else {
                    unset($path[sizeof($path)-1]);
                    return $path;
                }
            }
        }else {
            if (strpos($path[sizeof($path)-1], '.') > -1){
                if ($file){
                    return $path[sizeof($path)-1];    
                }else {
                    unset($path[sizeof($path)-1]);
                    return $path[sizeof($path)-1];
                }     
            }
            return ($path[sizeof($path)-1]!='')?$path[sizeof($path)-1]:$path[sizeof($path)-2];
        }   
    }  

?>
<?php

    $gluc_org = $_POST["gluc_org"];
    $gluc_env = $_POST["gluc_env"];
    $wall = $_POST["wall"];
    $tempr = $_POST["tempr"];

    // This fixes the '0 bug', now if 0 it is still numeric so unaffected, but if empty/null then non-numeric so set to 50
    if(!is_numeric($gluc_org)){
        
        $gluc_org = 50;   
    }

    if(!is_numeric($gluc_env)){
        
        $gluc_env = 100;
    }

    if(!is_numeric($wall)){
        
        $wall = 10;
    }

    if(!is_numeric($tempr)){
        
        $tempr = 25;
    }

    // Calculate whether organism stays same, dies, or reproduces
    if($tempr > 33 && $tempr < 40){

        // Reproduced
        header('Location: http://oostop.com/metaboapp/reproduced.php?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);

    }elseif($tempr > 67){
    
        // Dead
        header('Location: http://oostop.com/metaboapp/dead.php');
        //header('Location: http://oostop.com/metaboapp/dead.php?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);
    
    }elseif($wall > 1000 ){
        
        // Dead
        header('Location: http://oostop.com/metaboapp/dead.php');
        //header('Location: http://oostop.com/metaboapp/dead.php?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);
    
    }elseif($gluc_org > 1000 ){
        
        // Dead
        header('Location: http://oostop.com/metaboapp/dead.php');
        //header('Location: http://oostop.com/metaboapp/dead.php?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);
    
    }elseif($gluc_env > 1000 ){
        
        // Dead
        header('Location: http://oostop.com/metaboapp/dead.php');
        //header('Location: http://oostop.com/metaboapp/dead.php?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);
    
    }else{
        
        // Not affected
        header('Location: http://oostop.com/metaboapp?gluc_org=' . $gluc_org. '&gluc_env=' . $gluc_env . '&wall=' . $wall . '&tempr=' . $tempr);
    }
?>
<?php

/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 16/11/2015
 * Time: 21:06
 */

class PointeuseNiveau1 extends PointeuseBase{

    public function risque(){
        if($_SESSION["heureCumul"]/60/60 >= 11){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
}
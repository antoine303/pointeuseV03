<?php

/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 16/11/2015
 * Time: 21:06
 */
class pointeuseNiveau3 extends PointeuseBase {
    public $ponderation;

    public function risquesExtreme($ponderation){
        $ponderation=$_SESSION["heureCumul"]*2.5 ;
        return "Votre temps d�compt� augment� de 150% est �gal � ". $ponderation ."secondes" ;


    }
    public function estContamin�($ponderation){
        if($ponderation/60/60 >= 12){
            return true ;
        }
        else{
            return false;
        }
    }
}
?>

<?php

/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 16/11/2015
 * Time: 21:06
 */
class pointeuseNiveau2 extends PointeuseBase {
    public $ponderation;

    public function risqueMajeurs (){
        $ponderation=$_SESSION["heureCumul"]*1.4 ;
        return "Votre temps d�compt� augment� de 40% est �gal � ". $ponderation ."secondes" ;

}
}
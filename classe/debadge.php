<?php

/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 29/09/2015
 * Time: 11:39
 */
ini_set('display_errors', 'Off');
date_default_timezone_set('Europe/Paris');
error_reporting(E_ALL);

class debadge
{
    public static $action = 'debadge';
    public $sql;
    public function debadge($sql)
    {
        $this->sql = $sql;

        $sql = "UPDATE pointeuse SET heureDebadge = CURTIME()  WHERE user='Arnaud'";

        if ($req = $this->sql->query($sql)) {
            $_SESSION["heureDebadge"] = date('G:i:s');
            //Selectionne heure cumulé dans la base de donnée.
            $query1 = "SELECT heureCumul FROM `pointeuse` WHERE user='Arnaud'";

            $req1 = $this->sql->query($query1);

            $row = $req1->fetchAll();
            $heureCumul = (strtotime($_SESSION["heureDebadge"]) - strtotime($_SESSION["heureBadge"])) + $row[0]["heureCumul"];

            //Ajoute à la base de donnée la nouvelle heure cumulée.
            $query2 = "UPDATE pointeuse SET heureCumul = $heureCumul  WHERE user='Arnaud'";

            if ($req2 = $this->sql->query($query2)) {
                $_SESSION["heureCumul"] = $heureCumul;
                header('Location: ../view/index.php');

            }
        }
    }

}
<?php

session_start();

ini_set('display_errors', 'Off');
date_default_timezone_set('Europe/Paris');
error_reporting(E_ALL);

//Action lorsqu'on badge

class badge
{
    public static $action = 'badge';
    public $sql;
    public function badge($sql)
    {
        $this->sql = $sql;
        $sql = "UPDATE pointeuse SET heureBadge = CURTIME()  WHERE user='Arnaud'";

        if ($req = $this->sql->query($sql)) {
            $_SESSION["heureBadge"] = date('G:i:s');
            echo "Vous venez de badger à " . date('G:i:s');
            echo "<form action='../classe/redirection.php' method='post'>
                <input type='hidden' name='action' id='action' value='debadge'>
                <button type='submit'>Debadge</button>
              </form>";
        }
    }
}



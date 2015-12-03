<?php session_start();
$_SESSION["user"]="Arnaud";

if ( !isset ($_SESSION["heureCumul"])){
    $_SESSION["heureCumul"]=0;
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap1.css" rel="stylesheet" type="text/css"/>

    <title></title>
</head>
<body>
<legend> Bonjour <?php echo $_SESSION["user"]." votre temps cumulés est de ".$_SESSION["heureCumul"]." secondes "; ?> </legend>
<form action="../classe/redirection.php" method="post">
    <input type="hidden" name="action" id="action" value="badge">
    <button type="'submit"> Badge</button>
</form>

</body>
</html>


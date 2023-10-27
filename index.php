<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Registro PGUS</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Registro PGUS">
    <meta name="description" content="Registro PGUS">    
    <style>
        header{background-color:blue;} /* Código CSS */
    </style> 

</head>  
<body>    

<?php
//hubo,hay, y habrá bugs, si ve uno ayude mejorando el código
if (!(empty($_GET))) {
$thefolder = "novoyadecircualesestedirectoriohe/";

$matriculado="NO";
$matricula="";
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
            //echo "$file<br>";
            $a="";
            $a= explode(".", $file);
            $g=$a[0];
            /*echo substr($g,-8); 
            echo "<br>";*/
            if (( htmlspecialchars($_GET["id"]) == substr($g,-8))){
                $matriculado="SI";
                $matricula=$g;
            }
            else
            {
                //echo "NO";
            }
    }
    closedir($handler);
}

echo "El ID ". htmlspecialchars($_GET["id"]) ." , ". $matriculado . " está registrado.<br>";
$fp = fopen($thefolder.$matricula.".txt", "rb");
$datos = fread($fp, filesize($thefolder.$matricula.".txt"));
fclose($fp);
if ($matriculado=="SI"){
    echo "<br>Puede acceder a más información en el siguiente enlace: <a href=\"".$datos."\" target=\"_blank\">".$matricula."</a>";
}
}
?>
<br><br>

<i>Ver <a href="datos.php" target="_blank">datos</a> del registro de graduados</i>.

</body>  
</html>
<?php
 

// primera funcion
pintar_tabla(4,3);
function pintar_tabla($columnas, $filas) {
    
    $columnas = $columnas+1;
    $filas = $filas+1;
    
    $tabla = "<table border='1' cellpadding='10'>";
    for ( $i = 1; $i <= $filas; $i++ ) {
        $tabla .= "<tr>";
        for ( $b = 1; $b <= $columnas; $b++ ) {
            if ( $i == "1" )
                $tabla .= "<td>".$b."</td>";
            else {
                if ( $b == "1" ) {
                    $tabla .= "<td>".$i."</td>";
                } else {
                    $tabla .= "<td>&nbsp;</td>";
                }
                
            }
        }
        $tabla .= "</tr>";
    }
    $tabla .= "</tabla>";
    echo $tabla;
}


// segunda funcion    
$arrayColores[1][1] = '#FF0';
$arrayColores[1][2] = '#000';
$arrayColores[1][3] = '#0FF';
$arrayColores[2][1] = '#CCC';
$arrayColores[2][2] = '#F4F';
$arrayColores[2][3] = '#000';


pintar_tabla2(2,3, $arrayColores);

function pintar_tabla2 ( $columnas, $filas, $arrayColores ) {
    
    $columnas = $columnas+1;
    $filas = $filas+1;
  
    
    $tabla = "<table border='1' cellpadding='10'>";
    for ( $i = 1; $i <= $filas; $i++ ) {
        $tabla .= "<tr>";
        for ( $b = 1; $b <= $columnas; $b++ ) {
            if ( $i == "1" )
                $tabla .= "<td>".$b."</td>";
            else {
                if ( $b == "1" ) {
                    $tabla .= "<td>".$i."</td>";
                } else {

                    $tabla .= "<td bgcolor='".$arrayColores[$b-1][$i-1]."'>&nbsp;</td>";
                }
                
            }
        }
        $tabla .= "</tr>";
    }
    $tabla .= "</tabla>";
    echo $tabla;
}


?>
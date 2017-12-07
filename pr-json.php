<?php
$array = array(
	"id"=>"1", 
	"pregunta"=>"Como te llamas", 
	"respuesta"=>"Robinson enrique coello sanchez",
        "direccion"=>array(
                "Pais"=>"Ecuador",
                "Ciudad"=>"Quito",                                
                ),
	"puntos"=>"100",    
    );
echo json_encode($array); 
?>

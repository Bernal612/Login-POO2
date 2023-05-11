<?php

include_once('persona.php');


$persona = new Persona('Fernando','Gaitan', 26);

echo $persona->saludar();

unset($persona);
<?php


define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "login");


Class DatabasePDO {

    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;


    public function conn(){

        try{

            $base_de_datos = new PDO('mysql:host=localhost;dbname=localhost ' . $this->user, $this->pass);
            if ($base_de_datos) {
                return $base_de_datos;
            }
        }catch(Exception $e){
            return "Ocurrió algo con la base de datos: " . $e->getMessage();
        }
    }


}

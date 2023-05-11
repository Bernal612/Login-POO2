<?php
include_once('db.php');

class Usuario{
    public function __construct($user,$pass){
        $this->user = $user;
        $this->pass = $pass;
    }
}
public function login(){
    try {

        $cnn = $this->conn();
    
            //Preparamos la consulta sql
            $stmt = $cnn->prepare("SELECT * FROM usuarios WHERE usuario=:usernameEmail  AND contrasenia=:hash_password"); 
            $stmt->bindParam("usernameEmail", $this->user,PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->pass,PDO::PARAM_STR);
            //Ejecutamos la consulta
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage= "";
            if($count)
            {           
                $mesage = "verdadero";
            }
            else
            {
                $mesage = "Falso";
            } 
            }
            catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $mesage;
}
?>
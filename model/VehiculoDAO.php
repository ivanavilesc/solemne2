<?php
include('../model/Ley.php');

class LeyDAO {
        
    public function getAllVehiculos(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select * from vehiculo");
        
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  
        return $array;        
    }
    
    public function getCountSUV(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select count(*) AS TotalSUV from vehiculo where tipoveh='SUV'");
        
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $countsuv = $result->TotalSUV;       
        return $countsuv;        
    }
    
    public function getCountSEDAN(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select count(*) AS TotalSedan from vehiculo where tipoveh='SEDAN'");
        
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $countsedan = $result->TotalSedan;       
        return $countsedan;        
    }
    
    public function getTotalVehiculos(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select count(*) AS TotalVehiculos from vehiculo");
        
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $counttotal = $result->TotalVehiculos;       
        return $counttotal;        
    }
    
    public function getVehiculoPorPatente($patente){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select * from vehiculo WHERE patente =:patente");
        $stmt->bindParam(':patente',$patente);
        
        // careful, without a LIMIT this can take long if your table is huge
        $stmt->execute();
        
        //$patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo
        
        if ($result = $stmt->fetch(PDO::FETCH_OBJ)){
            $objVehiculo = new Vehiculo($result->patente, $result->tipoveh, $result->marcaveh, $result->modeloveh, $result->valarriendoveh, $result->nomarchivo, $result->archivo );
                
            return $objVehiculo;  
        }
        else{
             return null;   
        }
        
        //$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  
              
    }
    
    public function insertaVehiculo($patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('insert into vehiculo(patente, tipoveh, marcaveh, modeloveh, valarriendoveh, nomarchivo, archivo)'
                . ' values(?,?,?,?,?,?,?)');        
        //echo $this->patente;
        $PDOst->execute(array($patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo));        
        $_SESSION["Vehiculo"]="Vehiculo Ingresado Satisfactoriamente !";
        
        return true;        
    }
    
    public function deleteVehiculo($patente){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('delete from vehiculo where patente = :patente');        
        //echo $this->patente;
        $PDOst->bindParam(':patente',$patente);
        $PDOst->execute();
        echo 'ELIMINADO !!!';
        $_SESSION["Vehiculo"]="Vehiculo Eliminado Satisfactoriamente !";
        
        return true;        
    }
    
    
    
    public function updateVehiculo($patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $sql = "UPDATE vehiculo "
                . "SET tipoveh = :tipoveh , marcaveh = :marcaveh, modeloveh = :modeloveh, valarriendoveh = :valarriendoveh, nomarchivo = :nomarchivo, archivo = :archivo"
                . " WHERE patente = :patente";
               
        $PDOst = $dblink->prepare($sql);        
        //echo $this->patente;
        $PDOst->bindParam(':patente',$patente);
        $PDOst->bindParam(':tipoveh',$tipoveh);
        $PDOst->bindParam(':marcaveh',$marcaveh);
        $PDOst->bindParam(':modeloveh',$modeloveh);
        $PDOst->bindParam(':valarriendoveh',$valarriendoveh);
        $PDOst->bindParam(':nomarchivo',$nomarchivo);
        $PDOst->bindParam(':archivo',$archivo);
        $PDOst->execute();
        echo 'ACTUALIZADO !!!';
        $_SESSION["Vehiculo"]="Vehiculo Modificado Satisfactoriamente !";
        
        return true;        
    }
    
}

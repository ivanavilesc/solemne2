<?php
include('../model/Ley.php');

class LeyDAO {
        
    public function getAllLeyes(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select * from ley");
        
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
    
    public function getTotalLeyes(){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select count(*) AS TotalLeyes from ley");
        
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $counttotal = $result->TotalLeyes;       
        return $counttotal;        
    }
    
    public function getLeyPorNumLey($numley){
            $db = new DBConnect();
            $dblink = $db->conexion();

            if (!isset($dblink)) {
                return false;
            }
        
        $stmt = $dblink->prepare("select * from ley WHERE numley =:numley");
        $stmt->bindParam(':numley',$numley);
        
        // careful, without a LIMIT this can take long if your table is huge
        $stmt->execute();
        
        //$patente, $tipoveh, $marcaveh, $modeloveh, $valarriendoveh, $nomarchivo, $archivo
        
        if ($result = $stmt->fetch(PDO::FETCH_OBJ)){
            //$objLey = new LeyVehiculo($result->patente, $result->tipoveh, $result->marcaveh, $result->modeloveh, $result->valarriendoveh, $result->nomarchivo, $result->archivo );
            $objLey = new Ley($result->idley, $result->numley, $result->fecpublicacion, $result->fecpromulgacion, $result->titulo, $result->fechahora, $result->nomarchivo, $result->archivo);    
            return $objLey;  
        }
        else{
             return null;   
        }
        
        //$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  
              
    }
    
    public function insertaLey($idley, $numley, $fecpublicacion, $fecpromulgacion, $titulo, $fechahora, $nomarchivo, $archivo){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('insert into ley(idley, numley, fecpublicacion, fecpromulgacion, titulo, fechahora, nomarchivo, archivo)'
                . ' values(?,?,?,?,?,?,?,?)');        
        //echo $this->patente;
        $PDOst->execute(array($idley, $numley, $fecpublicacion, $fecpromulgacion, $titulo, $fechahora, $nomarchivo, $archivo));        
        $_SESSION["Ley"]="Ley Ingresada Satisfactoriamente !";
        
        return true;        
    }
    
    public function deleteLey($idley){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('delete from ley where idley = :idley');        
        //echo $this->patente;
        $PDOst->bindParam(':idley',$idley);
        $PDOst->execute();
        echo 'ELIMINADO !!!';
        $_SESSION["Ley"]="Ley Eliminada Satisfactoriamente !";
        
        return true;        
    }
    
    
    
    public function updateLey($idley, $numley, $fecpublicacion, $fecpromulgacion, $titulo, $fechahora, $nomarchivo, $archivo){
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $sql = "UPDATE ley "
                . "SET numley = :numley , fecpublicacion = :fecpublicacion, fecpromulgacion = :fecpromulgacion, titulo = :titulo, fechahora = :fechahora, nomarchivo = :nomarchivo, archivo = :archivo"
                . " WHERE idley = :idley";
               
        $PDOst = $dblink->prepare($sql);        
        //echo $this->patente;
        $PDOst->bindParam(':idley',$idley);
        $PDOst->bindParam(':numley',$numley);
        $PDOst->bindParam(':fecpublicacion',$fecpublicacion);
        $PDOst->bindParam(':fecpromulgacion',$fecpromulgacion);
        $PDOst->bindParam(':titulo',$titulo);
        $PDOst->bindParam(':fechahora',$fechahora);
        $PDOst->bindParam(':nomarchivo',$nomarchivo);
        $PDOst->bindParam(':archivo',$archivo);
        $PDOst->execute();
        echo 'ACTUALIZADO !!!';
        $_SESSION["Ley"]="Ley Modificada Satisfactoriamente !";
        
        return true;        
    }
    
}

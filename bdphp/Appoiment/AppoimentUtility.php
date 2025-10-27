<?php

include_once ("../BD/Database.php");

class AppoimentUtility{
    public static function getAppoiments(){
        try {
            $instance = Database::getInstance();
            $query = "
                SELECT 
                    c.id,
                    u.nombre_usuario AS usuario,
                    t.nombre AS tipo_cita,
                    c.fecha,
                    c.hora
                FROM citas c
                JOIN usuarios u ON c.usuario_id = u.id
                JOIN tipos_cita t ON c.tipo_cita_id = t.id
            ";
            $stmt = $instance->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $exception){
            throw new Exception("Error al acceder a la base de datos");
        }
    

    
    //return (Database::getInstance()->query("Select * from citas"))->fetchAll(PDO::FETCH_ASSOC);

}
}

// Función que devuelve un array asociativo con todas las citas

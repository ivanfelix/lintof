<?php
    class Conectar{
        const HOST = 'localhost';
        const USER = 'ivan';
        const PASS = 'sC3ucbNcC3yFynFR';
        const DB = 'lintof';
        
        public static function con(){
            $con = mysql_connect(self::HOST,self::USER,self::PASS);
            if(!$con){
                die('Connect Error(' . mysql_error());
            }
            $db_selected = mysql_select_db(self::DB);
            if(!$db_selected){
                die('Can\'t use db:' . mysql_error());
            }
            return $con;
        }
    }

$sql = "SELECT * FROM admins";
$res = mysql_query($sql,Conectar::con())/*or die(mysql_error())*/;
while($row = mysql_fetch_assoc($res)){
    echo $row["admin"];
}

//la clase Conectar esta funcionando
// defini constantes para agregar los datos de la BD buscar una mejor manera

?>



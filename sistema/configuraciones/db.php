<?php

class DB
{
    public static $instancia = null;
    public static function crearInstancia()
    {
        if (!isset(self::$instancia)) {
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion;user=root;password=Guatemala2022.');
            
        }
        return self::$instancia;
    }
}

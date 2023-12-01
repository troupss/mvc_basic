<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("localhost","root","","notes_master");
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}
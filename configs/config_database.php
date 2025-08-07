<?php
class Config_database
{
    static public function config_database()
    {
        return $conn = new mysqli("Localhost", "root", "", "piza_store");
    }
}
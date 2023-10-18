<?php
if (!function_exists("enc")) 
{
    function enc(string $string)
    {
		$encrypter = \Config\Services::encrypter();
        $string     = $encrypter->encrypt($string);
        return $string;
    }
}

if (!function_exists("dec")) 
{
    function dec(string $string)
    {
		$encrypter = \Config\Services::encrypter();
        $string		= $encrypter->decrypt($string);
        return $string;
        
    }
}

if (!function_exists("db")) 
{
    function db(string $string)
    {
        $db     = \Config\Database::connect();
        $db     = $db->table($string);
        return $db;
    }
}

if (!function_exists("sess")) 
{
    function sess()
    {
        $sess    = \Config\Services::session();
        return $sess;
    }
}

if (!function_exists("request")) 
{
    function request()
    {
        $request    = \Config\Services::request();
        return $request;
    }
}

    



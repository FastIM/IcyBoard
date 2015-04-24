<?php

/**
 * auth short summary.
 *
 * auth description.
 *
 * @version 1.0
 * @author Tobias
 */
namespace ibc;

class auth
{
    public function isLoggedIn() 
    {
        if(isset($_COOKIE['icy_password']) && isset($_COOKIE['icy_username']))
        {
            
        }
    }
    
    public function Login($username, $password) 
    {
        
    }
}

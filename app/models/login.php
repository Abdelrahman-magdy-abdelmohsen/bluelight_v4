<?php
namespace MVC\models;

use MVC\core\model;

class login extends model
{


    public function check_login($email,$password)
    {
        $count = model::db()->row("SELECT email FROM user WHERE email = ?  AND password = ?" ,[$email,$password]);
        return $count; // Return the count of emails or password found
    }
    public function get_user($email) {
        $data = model::db()->row("SELECT username, email, first_name, last_name FROM user WHERE email = ?", [$email]);
        return $data;
    }




}
?>

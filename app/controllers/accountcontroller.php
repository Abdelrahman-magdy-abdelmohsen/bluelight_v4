<?php
namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\model;
use MVC\models\login;
use MVC\models\register;
use Rakit\Validation\Validator;
use MVC\core\Session;
use MVC\core\helper;

class accountcontroller extends controller
{
    public function __construct()
    {
        Session::Start();
    }

    public function register()
    {
        $this->view("account/register", ['title' => 'register']);
    }

    public  function login(){
        $this->view("account/login", ['title' => 'login']);
    }
    public function post_login() {
        if (!empty($_POST)) {
            $email = $_POST['email_username'];
            $password = $_POST['password'];

            $loginModel = new login();
            $loginSuccess = $loginModel->check_login($email, $password);

            if ($loginSuccess) {
                $userData = $loginModel->get_user($email);
                Session::Set('user',$userData);
 $user =                Session::Get('user');
 print_r($user);
            } else {
                echo "no"; // Login failed
            }
        }
    }

    public function post_user()
    {
        if (!empty($_POST)) { // Check if $_POST is not empty (data sent from the form)
            $validator = new Validator;
            $regis = new register();

            $username = $_POST["username"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $con_pass = $_POST["con_pass"];

            // Validate form inputs
            $validation = $validator->validate($_POST, [
                'username'   => 'required',
                'firstname'  => 'required',
                'lastname'   => 'required',
                'email'      => 'required|email',
                'password'   => 'required|min:6',
                'con_pass'   => 'required|same:password',
            ]);

            $errors = [];

            if ($validation->fails()) {
                // Get validation errors
                $validationErrors = $validation->errors();

                $errors = [
                    'username' => $validationErrors->first('username'),
                    'firstname' => $validationErrors->first('firstname'),
                    'lastname' => $validationErrors->first('lastname'),
                    'email' => $validationErrors->first('email'),
                    'password' => $validationErrors->first('password'),
                    'con_pass' => $validationErrors->first('con_pass'),

                ];
                $this->view("account/register", ['title' => 'register','validationErrors'=>$errors]);
                exit;
            }

            // Check if the email already exists
            $emailExists = $regis->checkemail($email);
            if ($emailExists > 0) {
                $this->view("account/register", ['title' => 'register', 'errormsg' => 'email already exist']);
                exit;
            }

            // Check if the username already exists
            $usernameExists = $regis->checkusername($username);
            if ($usernameExists > 0) {
                $this->view("account/register", ['title' => 'register', 'errormsg' => 'username already exist']);
                exit;
            }


            if (isset($_POST['g-recaptcha-response'])) {
                $secretKey = "6Le6pB4pAAAAAE1ggDeW6YT6iI75y4xICGQykasE";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST["g-recaptcha-response"];
                $URL = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response";
                $fire = file_get_contents($URL);
                $data = json_decode($fire);
                if ($data->success == true) {
                    // All checks passed, proceed to register the user
                    $data = [
                        'username' => $username,
                        'first_name' => $firstname,
                        'last_name' => $lastname,
                        'email' => $email,
                        'password' => $password,
                    ];
                    $regis->register($data);
                    // Show success message after the registration
                    $this->view("account/register", ['title' => 'register', 'success' => 'Account created successfully']);
                    exit();
                } else {
                    $this->view("account/register", ['title' => 'register', 'captacha_error' => 'please fill the captcha']);
                }
            } else {
                echo "error";
            }



        } else {
            // If no data sent from the form, redirect to the register page
            helper::redirect("account/register");
        }
    }
}
?>

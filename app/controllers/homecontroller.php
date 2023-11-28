<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\register;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\Session;
use MVC\core\helper;
class homecontroller extends controller{
    public function __construct()
    {
        session::Start();
    }

    public function index(){
    $title = "home index";
    $h1 = "hello from h1 ";
  $this->view("home/index",['title'=>$title,'h1'=>$h1]);

}
    public function checkout()
    {
        $this->view('home/check_out', ['title' => 'checkout']);
    }

    public function about_us()
    {
        $this->view('home/about_us', ['title' => 'about_us']);
    }

    public function contact_us()
    {
        $this->view('home/contact_us', ['title' => 'contact_us']);
    }




public  function postlogin(){
    $this->view('home/login',['title'=>'login']);
    $validator = new Validator;

    $validation = $validator->validate($_POST, [
        'email'                 => 'required|email',
        'password'              => 'required|min:6',

        ]);

    if ($validation->fails()) {
        // handling errors
        $errors = $validation->errors();
        echo "<pre>";
        print_r($errors->firstOfAll());
        echo "</pre>";
        exit;
    } else {
        // validation passes
        $user = new user();
            $data = $user->getuser($_POST['email'],$_POST['password']);
        session::Set('user',$data);
helper::redirect("user/index");
    }
}

}

?>
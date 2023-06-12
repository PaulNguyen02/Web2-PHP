<?php
    class SigninController extends BaseController
    {
        private $signinmodel;
        function __construct()
        {
            $this->model('SigninModel');
            $this->signinmodel = new SigninModel(); 
        }
        function show()
        {
            return $this->view("signin");
        }
        function login()
        {
            $login = array();
            $username=null; $pass=null;
            if(isset($_POST['username']) && isset($_POST['pass']))
            {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                array_push($login, $username, $pass);
                $data = $this->signinmodel->signin($login);
                if(count($data) > 0)        //Nếu tìm được tài khoản
                {
                    if(!isset($_SESSION["username"]))
                    {
                        session_start();
                        $usrname = $_POST['username'];
                        $_SESSION["username"]= $usrname;      
                        return $this->view("home");                  
                    }
                    else
                    {
                        return $this->view("home");
                    }
                }
                else
                {
                    return $this->view("signin");
                }
            }
        }
        function logout()
        {
            session_start();
            session_destroy();
            return $this->view("home");
        }
    }
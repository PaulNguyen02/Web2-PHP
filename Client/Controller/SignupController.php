<?php
    class SignupController extends BaseController
    {
        private $signupmodel;
        function __construct()
        {
            $this->model('SignupModel');
            $this->signupmodel = new SignupModel(); 
        }
        function show()
        {
            return $this->view("signup");
        }
        function create()
        {
            $info = array();
            $name=null; $username=null; $dob=null; $email=null; $phonenumber=null; $pass=null; $gender=null;
            if(isset($_POST['hoTen']) && isset($_POST['taiKhoan']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['soDienThoai']) && isset($_POST['matKhau']) && isset($_POST['gioiTinh']))
            {
                $name = $_POST['hoTen'];
                $username = $_POST['taiKhoan'];
                $dob = $_POST['dob'];
                $email = $_POST['email'];
                $phonenumber = $_POST['soDienThoai'];
                $pass = $_POST['matKhau'];
                if($_POST['gioiTinh']=='nam')
                {
                    $gender = 1;
                }
                else if($_POST['gioiTinh']=='nu')
                {
                    $gender = 2;
                }
                else
                {
                    $gender = 3;
                }
                array_push($info, $name, $username, $pass, $phonenumber, $dob, $email, $gender);
                $this->signupmodel->Signup($info);
            }
            return $this->view("signin");       //Redirect sign in 
        }
    }


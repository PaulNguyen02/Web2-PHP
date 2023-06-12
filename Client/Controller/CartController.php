<?php
    class CartController extends BaseController
    {
        private $prds;
        function __construct()
        {
            $this->model('CartModel');
            $this->prds = new CartModel();
        }
        function show()
        {      
            session_start();
            if(isset($_SESSION['username']))
            {
                $username = $_SESSION['username'];
                $prdlist = $this->prds->search($username);
                return $this->view('cart', ['prdlist' => $prdlist]);
            }
            else
            {
                return $this->view('signin');
            }            
        }
        function addtocart()
        {
            session_start();
            $cart = array();
            $username=null; $masp=null; $name=null; $num=null; $price=null; $hinh=null;
            if(isset($_SESSION['username']))
            {
                if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['num']) && isset($_GET['price']) && isset($_GET['pic']))
                {
                    $username= $_SESSION['username'];
                    $masp = (int)$_GET['id'];
                    $name = urldecode($_GET['name']);
                    $num = (int)$_GET['num'];
                    $price = (float)$_GET['price'];
                    $hinh = $_GET['pic'];
                    array_push($cart,$username,$masp,$name,$num,$price,$hinh);
                    $this->prds->addtocart($cart);
                }
                header("Location: index.php?controller=cart&action=show");
            }
            else
            return $this->view("signin");
        } 
        function removefromcart()
        {
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $this->prds->removefromcart($id);
            }
            header("Location: index.php?controller=cart&action=show");
        }
    }
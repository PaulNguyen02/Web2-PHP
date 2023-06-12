<?php
    ob_start(); 
    class AccountController extends BaseController {
        protected $AccountModel; 
        public function __CONSTRUCT() {
            $this->loadModel('Account');
            $this->AccountModel = new Account();
        }
        public function index(){
            $limit = 8;
            $prePage = $this->AccountModel->getPrevPage();
            $currentPage = $this->AccountModel->getCurrentPage();
            $pages = $this->AccountModel->getTotalAccountPage($limit);
            $nextPage = $this->AccountModel->getNextPage($pages);
            $accounts = $this->AccountModel->accountPagination($limit);

            $this->loadView('account/index.php',[
                'limit' => $limit ,
                'prePage' => $prePage ,
                'currentPage' => $currentPage,
                'pages' => $pages ,
                'nextPage' => $nextPage ,
                'accounts' => $accounts 
            ]);
        }
        
        public function insert(){            
            $data= array();
            $name=null; $username=null; $dob=null; $email=null; $phone=null; $password=null; $gender=null; $auth=null;
            if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])
            && isset($_POST['gender']) && isset($_POST['auth'])
            ) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $dob = $_POST['dob'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                if($_POST['gender']=='nam')
                {
                    $gender = 1;
                }
                if($_POST['gender']=='nu')
                {
                    $gender = 2;
                }
                if($_POST['auth']=='admin')
                {
                    $auth = 1;
                }
                if($_POST['auth']=='employee')
                {
                    $auth = 2;
                }
                array_push($data,$name,$username,$password,$phone,$dob, $email, $gender,$auth);
                $this->AccountModel->insertAccount($data);      
                header("Location: /adminmotoserv/index.php?controller=account&action=index&page=1");          
            }
            $this->loadView('account/create.php',[
                'error' => $this->error
            ]);
        }
        public function delete(){            
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $this->AccountModel->deleteAccount($id);
                header("Location: index.php?controller=account&action=index&page=1");
                exit();
            }
        }
        public function update(){
            $data= array();
            $name=null; $dob=null; $email=null; $phone=null; $password=null; $gender=null; $auth=null;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                if(isset($_POST['name']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])
                && isset($_POST['gender']) && isset($_POST['auth'])
                ) {
                    $name = $_POST['name'];
                    $dob = $_POST['dob'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    if($_POST['gender']=='nam')
                    {
                        $gender = 1;
                    }
                    if($_POST['gender']=='nu')
                    {
                        $gender = 2;
                    }
                    if($_POST['auth']=='admin')
                    {
                        $auth = 1;
                    }
                    if($_POST['auth']=='employee')
                    {
                        $auth = 2;
                    }
                    array_push($data,$name,$password,$phone,$dob, $email, $gender,$auth);
                    $this->AccountModel->updateAccount($id, $data);       
                    header("Location: /adminmotoserv/index.php?controller=account&action=index&page=1");               
               }
               $this->loadView('account/update.php',[
                'error' => $this->error
               ]);
            }
        }

    }

?>
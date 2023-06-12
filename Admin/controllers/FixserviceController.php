<?php 
    ob_start();
    class FixserviceController extends BaseController {
        protected $ServiceModel;
        public function __construct()
        {
            $this->loadModel('Fixservice');
            $this->ServiceModel = new Fixservice();
        }
        public function index(){
            $limit = 5;
            $prePage = $this->ServiceModel->getPrevPage();
            $currentPage = $this->ServiceModel->getCurrentPage();
            $pages = $this->ServiceModel->getTotalServicePage($limit);
            $nextPage = $this->ServiceModel->getNextPage($pages);
            $service = $this->ServiceModel->servicePagination($limit);
            $this->loadView('fixservice/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'services' => $service
            ]);
        }
        public function create(){            
            $data = array();
            $name=null; $price=null;      
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                array_push($data,$name, $price);
                $this->ServiceModel->insertService($data);  
                header("Location: /adminmotoserv/index.php?controller=fixservice&action=index&page=1");
            }
            $this->loadView('fixservice/create.php', [
                'error' => $this->error
            ]);
        }
        public function delete(){
            if(isset($_GET['id'])) {
               $id = $_GET['id'];
               $isDelete = $this->ServiceModel->deleteService($id);
               header("Location: index.php?controller=fixservice&action=index&page=1");
               exit();
            }
        }
        public function update(){            
            $data = array();
            $name=null; $price=null;       
            if(isset($_POST['submit']) && isset($_GET['id'])) {
                $id= $_GET['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                array_push($data,$name,$price);
                $this->ServiceModel->updateService($id, $data);  
                header("Location: /adminmotoserv/index.php?controller=fixservice&action=index&page=1");
            }
            $this->loadView('fixservice/update.php', [
                'error' => $this->error
            ]);
        }
    }
?>
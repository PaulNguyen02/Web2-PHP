<?php 
    ob_start();
    class ProductController extends BaseController {
        protected $ProductModel;
        public function __construct()
        {
            $this->loadModel('Product');
            $this->ProductModel = new Product();
        }
        public function index(){
            $limit = 10;
            $prePage = $this->ProductModel->getPrevPage();
            $currentPage = $this->ProductModel->getCurrentPage();
            $pages = $this->ProductModel->getTotalProductPage($limit);
            $nextPage = $this->ProductModel->getNextPage($pages);
            $products = $this->ProductModel->productPagination($limit);
            $this->loadView('product/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'products' => $products
            ]);
        }
        public function create(){            
            $categories = $this->ProductModel->getCategory();  
            $brands = $this->ProductModel->getBrand();  
            $nations = $this->ProductModel->getNation();  
            $data = array();
            $name=null; $quantity=null; $price=null; $type=null; $brand=null; $nation=null; $pic=null;         
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $type = $_POST['type'];
                $brand = $_POST['brand'];
                $nation = $_POST['nation'];
                $pic = $_POST['pic'];
                array_push($data,$name,$quantity,$price,$type,$brand,$nation,$pic);
                $this->ProductModel->insertProduct($data);  
                header("Location: /adminmotoserv/index.php?controller=product&action=index&page=1");
            }
            $this->loadView('product/create.php', [
                'categories' => $categories,
                'brands' => $brands,
                'nations' => $nations,
                'error' => $this->error
            ]);
        }
        public function delete(){
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
               $isDelete = $this->ProductModel->deleteProduct($id);
               header("Location: index.php?controller=product&action=index&page=1");
               exit();
            }
        }
        public function update(){            
            $categories = $this->ProductModel->getCategory();  
            $brands = $this->ProductModel->getBrand();  
            $nations = $this->ProductModel->getNation();  
            $data = array();
            $name=null; $price=null; $type=null; $brand=null; $nation=null; $pic=null;         
            if(isset($_POST['submit']) && isset($_GET['id'])) {
                $id = $_GET['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $type = $_POST['type'];
                $brand = $_POST['brand'];
                $nation = $_POST['nation'];
                $pic = $_POST['pic'];
                array_push($data,$name,$price,$type,$brand,$nation,$pic);
                $this->ProductModel->updateProduct($id, $data);  
                header("Location: /adminmotoserv/index.php?controller=product&action=index&page=1");
            }
            $this->loadView('product/update.php', [
                'categories' => $categories,
                'brands' => $brands,
                'nations' => $nations,
                'error' => $this->error
            ]);
        }
    }
?>
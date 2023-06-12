<?php 
    ob_start();
    
    class ProductBillController extends BaseController {
        protected $ProductBill;
        public function __construct()
        {
            $this->loadModel('ProductBill');
            $this->ProductBill = new ProductBill();
        }
        public function index(){
            $limit = 5;
            $prePage = $this->ProductBill->getPrevPage();
            $currentPage = $this->ProductBill->getCurrentPage();
            $pages = $this->ProductBill->getTotalProductBillPage($limit);
            $nextPage = $this->ProductBill->getNextPage($pages);
            $productBills = $this->ProductBill->productBillPagination($limit);
            $this->loadView('productbill/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'productBills' => $productBills
            ]);
        }
        public function Test() {
            // print_r($_GET);
            $mysqltime = date('Y-m-d H:i:s');

            $customer = $_GET["customer"];
            $employee = $_GET["employee"];
            $total = $_GET["total"];

            $this->ProductBill->insertProductBill($mysqltime,$employee, $customer, $total);
            $latestID = $this->ProductBill->getLatestProductBill();
            print_r($latestID);
            $data=$_GET["data"];
            $dataset = (array) json_decode($data); 

            foreach ($dataset as $key => $value) {
                $data = get_object_vars($value);
                $this->ProductBill->createDetails($latestID, $data["masp"], $data["tensp"], $data["sl"], $data["gia"]);
            }

            // if(isset($_POST['time']) && isset($_POST['employee'])&& isset($_POST['customer'])&& isset($_POST['total'])&& isset($_POST['data']))
            // {
            //     $array=array();
            //     $time=$_GET["time"];
            //     $employee=$_GET["employee"];
            //     $customer=$_GET["customer"];
            //     $total=$_GET["total"];

            //     // array_push($array,$time,$customer,$employee,$total);
            // }
            
        }
        public function create(){
            $searchstr=null;
            if(isset($_POST['browse']))
            {
                $searchstr=$_POST['browse'];
            }
            $customers = $this->ProductBill->getCustomer();
            $this->loadModel('Product');
            $productmodel = new Product();
            $products = $productmodel->SearchProduct($searchstr);
            $this->loadModel('Account');
            $accountmodel = new Account();
            $employees = $accountmodel->getEmployee();
            if(isset($_GET['time']) && isset($_GET['employee'])&& isset($_GET['customer'])&& isset($_GET['total'])&& isset($_GET['data']))
            {
                $array=array();
                $time=$_GET["time"];
                $employee=$_GET["employee"];
                $customer=$_GET["customer"];
                $total=$_GET["total"];
                $data=$_GET["data"];
                $dataset = json_decode($data); 
                //array_push($array,$time,$customer,$employee,$total);
                $this->ProductBill->insertProductBill($time,$employee,$customer,$total);
                header("Location: /adminmotoserv/index.php?controller=productbill&action=index&page=1");
            }
            $this->loadView('productbill/create.php',[
                'customers' => $customers,
                'products' => $products,
                'employees' => $employees,
                'error' => $this->error
            ]);
        }


        

        public function searchProduct(){
            $searchstr=null;
            $limit = 5;
            $prePage = $this->ProductBill->getPrevPage();
            $currentPage = $this->ProductBill->getCurrentPage();
            $pages = $this->ProductBill->getTotalProductBillPage($limit);
            $nextPage = $this->ProductBill->getNextPage($pages);
            $productBills = $this->ProductBill->productBillPagination($limit);
            if(isset($_POST['txtsearch']))
            {
                $searchstr=$_POST['txtsearch'];
            }
            $this->loadModel('ProductBill');
            $productbillmodel = new ProductBill();
            $productBills = $productbillmodel->searchProduct($searchstr, $limit);
            
            $this->loadView('productbill/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'productBills' => $productBills,
                'error' => $this->error
            ]);
        }
        public function update(){
            $searchstr=null;
            if(isset($_POST['browse']))
            {
                $searchstr=$_POST['browse'];
            }
            $customers = $this->ProductBill->getCustomer();
            $this->loadModel('Product');
            $this->loadModel('Account');
            $accountmodel = new Account();
            $employees = $accountmodel->getEmployee();
            
            if(isset($_POST['update']) && isset($_GET['id']) )
            {
                    $searchstr=$_GET['id'];
                    $customers=$_POST['khachhang'];
                    $employees=$_POST['nhanvien'];
                    $this->ProductBill->updateProductBill($searchstr,$customers,$employees);
                    header("Location: /adminmotoserv/index.php?controller=productbill&action=index&page=1");
               
            }

            $this->loadView('productbill/update.php',[
                'customers' => $customers,
                'employees' => $employees,
                'error' => $this->error
            ]);
           
        }
    }
?>
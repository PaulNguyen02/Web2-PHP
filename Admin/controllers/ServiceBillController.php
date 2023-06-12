<?php 
    ob_start();
    
    class ServiceBillController extends BaseController {
        protected $ServiceBill;
        public function __construct()
        {
            $this->loadModel('ServiceBill');
            $this->ServiceBill = new ServiceBill();
        }
        public function index(){
            $limit = 5;
            $prePage = $this->ServiceBill->getPrevPage();
            $currentPage = $this->ServiceBill->getCurrentPage();
            $pages = $this->ServiceBill->getTotalServiceBillPage($limit);
            $nextPage = $this->ServiceBill->getNextPage($pages);
            $serviceBills = $this->ServiceBill->serviceBillPagination($limit);
            $this->loadView('servicebill/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'serviceBills' => $serviceBills
            ]);
        }
        public function Test() {
            // print_r($_GET);
            $mysqltime = date('Y-m-d H:i:s');

            $customer = $_GET["customer"];
            $employee = $_GET["employee"];
            $total = $_GET["total"];

            $this->ServiceBill->insertServiceBill($mysqltime,$employee, $customer, $total);
            $latestID = $this->ServiceBill->getLatestServiceBill();
            print_r($latestID);
            $data=$_GET["data"];
            $dataset = (array) json_decode($data); 

            foreach ($dataset as $key => $value) {
                $data = get_object_vars($value);
                $this->ServiceBill->createDetails($latestID, $data["madv"], $data["tendv"], $data["sl"], $data["gia"]);
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
            $customers = $this->ServiceBill->getCustomer();
            $this->loadModel('Fixservice');
            $servicemodel = new Fixservice();
            $services = $servicemodel->searchService($searchstr);
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
                $this->ServiceBill->insertServiceBill($time,$employee,$customer,$total);
                header("Location: /adminmotoserv/index.php?controller=servicebill&action=index&page=1");
            }
            $this->loadView('productbill/create.php',[
                'customers' => $customers,
                'services' => $services,
                'employees' => $employees,
                'error' => $this->error
            ]);
        }


        public function searchService(){
            $searchstr=null;
            $limit = 5;
            $prePage = $this->ServiceBill->getPrevPage();
            $currentPage = $this->ServiceBill->getCurrentPage();
            $pages = $this->ServiceBill->getTotalServiceBillPage($limit);
            $nextPage = $this->ServiceBill->getNextPage($pages);
            $serviceBills = $this->ServiceBill->serviceBillPagination($limit);
            if(isset($_POST['txtsearch']))
            {
                $searchstr=$_POST['txtsearch'];
            }
            $this->loadModel('ServiceBill');
            $servicebillmodel = new ServiceBill();
            $serviceBills = $servicebillmodel->searchService($searchstr, $limit);
            
            $this->loadView('servicebill/index.php',[
                'limit' => $limit,
                'prePage' => $prePage,
                'currentPage' => $currentPage,
                'pages' => $pages,
                'nextPage' => $nextPage,
                'serviceBills' => $serviceBills,
                'error' => $this->error
            ]);
        }
        public function update(){
            $searchstr=null;
            if(isset($_POST['browse']))
            {
                $searchstr=$_POST['browse'];
            }
            $customers = $this->ServiceBill->getCustomer();
            $this->loadModel('FixService');
            $this->loadModel('Account');
            $accountmodel = new Account();
            $employees = $accountmodel->getEmployee();
            
            if(isset($_POST['update']) && isset($_GET['id']) )
            {
                    $searchstr=$_GET['id'];
                    $customers=$_POST['khachhang'];
                    $employees=$_POST['nhanvien'];
                    $this->ServiceBill->updateServiceBill($searchstr,$customers,$employees);
                    header("Location: /adminmotoserv/index.php?controller=servicebill&action=index&page=1");
               
            }

            $this->loadView('servicebill/update.php',[
                'customers' => $customers,
                'employees' => $employees,
                'error' => $this->error
            ]);
           
        }
        
    }
?>
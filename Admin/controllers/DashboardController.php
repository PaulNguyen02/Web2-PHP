<?php 
    class DashboardController extends BaseController{
        protected $Account;
        protected $Product;
        protected $Fixservice;
        protected $ProductBill;
        protected $ServiceBill;
        protected $Job;
        protected $Recruitment;
        protected $Booking;
        public function __CONSTRUCT() {
            $this->loadModel('Account');
            $this->loadModel('Product');
            $this->loadModel('Fixservice');
            $this->loadModel('ProductBill');
            $this->loadModel('ServiceBill');
            $this->loadModel('Job');
            $this->loadModel('Recruitment');
            $this->loadModel('Booking');

            $this->Account = new Account();
            $this->Product= new Product();
            $this->Fixservice = new FixService();
            $this->ProductBill = new ProductBill();
            $this->ServiceBill = new ServiceBill();
            $this->Job = new Job();
            $this->Recruitment = new Recruitment();
            $this->Booking = new Booking();
        }
        public function index(){
            $accounts = $this->Account->getAccountRecord();
            $products = $this->Product->getProductRecord();
            $fixservices = $this->Fixservice->getFixserviceRecord();
            $productbills = $this->ProductBill->getProductBillRecord();
            $servicebills = $this->ServiceBill->getServiceBillRecord();
            $jobs = $this->Job->getJobRecord();
            $recruitments = $this->Recruitment->getRecruitmentRecord();
            $bookings = $this->Booking->getBookingRecord();

            $this->loadView('dashboard/index.php', [
                'accounts' => $accounts,
                'products' => $products,
                'fixservices' => $fixservices,
                'productbills' =>$productbills,
                'servicebills' =>$servicebills,
                'jobs' => $jobs,
                'recruitments' => $recruitments,   
                'bookings' => $bookings,
            ]);
        }
    }
?>
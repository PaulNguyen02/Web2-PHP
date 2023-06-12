<?php
ob_start();
class JobController extends BaseController
{
    protected $Job;
    public function __CONSTRUCT() {
        $this->loadModel('Job');

        $this->Job = new Job();
        
    }
    public function index(){
        $limit = 5;
        $prePage = $this->Job->getPrevPage();
        $currentPage = $this->Job->getCurrentPage();
        $pages = $this->Job->getTotalJobPage($limit);
        $nextPage = $this->Job->getNextPage($pages);
        $jobs = $this->Job->jobPagination($limit);
        
        $this->loadView('job/index.php',[
            'limit' => $limit,
            'prePage' => $prePage,
            'currentPage' => $currentPage,
            'pages' => $pages,
            'nextPage' => $nextPage,
            'jobs' => $jobs,
        ]);
    }
    public function insert(){
        if(isset($_POST['submit'])) {
            // $uid = $_POST['uid'];
            $tencv = $_POST['tencv'];
            $mota = $_POST['mota'];
            $luong = $_POST['luong'];
            $hinh = $_POST['hinh'];
            $data = [];
            array_push($data, $tencv, $mota, $luong, $hinh);
            $this->Job->insertJob($data);
            header("Location: /adminmotoserv/index.php?controller=job&action=index&page=1");
        }
        
        $this->loadView('job/create.php', [
            'error' => $this->error
        ]);
        
    }
    
    public function delete(){
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
           $isDelete = $this->Job->deleteJob($id);
           header("Location: /adminmotoserv/index.php?controller=job&action=index&page=1");
           exit();
        }
    }
}
<?php
ob_start();
class RecruitmentController extends BaseController
{
    protected $Recruitment;
    public function __CONSTRUCT() {
        $this->loadModel('Recruitment');

        $this->Recruitment = new Recruitment();
        
    }
    public function index(){
        $limit = 5;
        $prePage = $this->Recruitment->getPrevPage();
        $currentPage = $this->Recruitment->getCurrentPage();
        $pages = $this->Recruitment->getTotalRecruitmentPage($limit);
        $nextPage = $this->Recruitment->getNextPage($pages);
        $recruitments = $this->Recruitment->recruitmentPagination($limit);
        
        $this->loadView('recruitment/index.php',[
            'limit' => $limit,
            'prePage' => $prePage,
            'currentPage' => $currentPage,
            'pages' => $pages,
            'nextPage' => $nextPage,
            'recruitments' => $recruitments,
        ]);
    }
    public function delete(){
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
           $isDelete = $this->Recruitment->deleteRecruitment($id);
           header("Location: index.php?controller=recruitment&action=index&page=1");
           exit();
        }
    }
}

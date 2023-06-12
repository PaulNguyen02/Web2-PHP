<?php
ob_start();
class BookingController extends BaseController
{
    protected $Booking;
    public function __CONSTRUCT() {
        $this->loadModel('Booking');
        $this->Booking = new Booking();
    }
    
    public function index(){
        $limit = 5;
        $prePage = $this->Booking->getPrevPage();
        $currentPage = $this->Booking->getCurrentPage();
        $pages = $this->Booking->getTotalBookingPage($limit);
        $nextPage = $this->Booking->getNextPage($pages);
        $bookings = $this->Booking->bookingPagination($limit);
        
        $this->loadView('booking/index.php',[
            'limit' => $limit,
            'prePage' => $prePage,
            'currentPage' => $currentPage,
            'pages' => $pages,
            'nextPage' => $nextPage,
            'bookings' => $bookings,
        ]);
    }
    
    public function delete(){
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
           $isDelete = $this->Booking->deleteBooking($id);
           header("Location: index.php?controller=booking&action=index&page=1");
           exit();
        }
    }
}


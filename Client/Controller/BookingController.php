<?php
    class BookingController extends BaseController
    {
        private $booking;
        function __construct()
        {
            $this->model('BookingModel');
            $this->booking = new BookingModel(); 
        }
        function book()
        {
            $bookinginfo = array();
            $name=null; $email=null; $phonenumber=null; $address=null; $service=null; $date=null; $require=null;
            if((isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['address']) && isset($_POST['service']) && isset($_POST['date'])) || isset($_POST['require']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phonenumber = $_POST['phonenumber'];
                $address = $_POST['address'];
                $service = $_POST['service'];
                $date = $_POST['date'];
                $require = $_POST['require'];
                array_push($bookinginfo, $name, $email, $phonenumber, $address, $service, $date, $require);
                $this->booking->book($bookinginfo);
            }
            return $this->view("home"); 
        }
    }
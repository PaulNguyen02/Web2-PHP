<?php
    class HomeController extends BaseController
    {
        private $servicemodel;
        function __construct()
        {
            $this->model('ServiceModel');
            $this->servicemodel = new ServiceModel(); 
        }
        function main()
        {                     
            $service = $this->servicemodel->show();
            return $this->view('home', ['service' => $service]);
        }
        function about()
        {
            return $this->view('about');
        } 
        function service()
        {
            return $this->view('service');
        } 
        function contact()
        {
            return $this->view('contact');
        } 
        function booking()
        {
            $service = $this->servicemodel->show();
            return $this->view('booking', ['service' => $service]);
        } 
        function product()
        {
            return $this->view('product');
        } 
        function team()
        {
            return $this->view('team');
        } 
        function testimonial()
        {
            return $this->view('testimonial');
        } 
        function learnmore()
        {
            return $this->view('learnmore');
        }
        function Faq()
        {
            return $this->view('faq');
        }
        function error()
        {
            return $this->view('error404');
        }
        function signin()
        {
            return $this->view('signin');
        } 
    }
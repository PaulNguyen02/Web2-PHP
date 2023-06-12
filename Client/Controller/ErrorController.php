<?php
    class ErrorController extends BaseController
    {
        function error404()
        {
            return $this->view('error404');
        }
    }
<?php
    class BaseController {
        protected $viewFolder = 'views';
        protected $modelFolder = 'models';
        public $error;
        public function loadView($path, $data = []) {
            $path = $this->viewFolder . '/'. $path;
            require_once $path;
        }
    
        public function loadModel($path) {
            require_once $this->modelFolder . '/' .ucfirst($path).'.php'; 
        }
    }

?>
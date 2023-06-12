<?php
    class BaseController
    {
        const VIEW_FOLDER = 'View';
        const MODEL_FOLDER = 'Model';
        protected function view($viewpath, array $data=[])
        {
            foreach($data as $key => $value){
                $$key = $value;
            }
            require ( self::VIEW_FOLDER . '/' . str_replace('.','/', $viewpath).'.php');
        } 
        protected function model($modelpath)
        {
            $modelpath = self::MODEL_FOLDER . '/' . $modelpath .'.php';
            //die ($viewpath);
            require ($modelpath);
        }
    }
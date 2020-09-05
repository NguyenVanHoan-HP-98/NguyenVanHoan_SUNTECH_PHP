<?php
    //BaseController có tác dụng thức hiện load views
    
    class BaseController{

        const VIEW_FOLDER_NAME = 'Views';
        const MODEL_FOLDER_NAME = 'Models';
        
        protected function view($viewPart , array $data = [])
        {
            foreach($data as $key => $value)
            {   
                $$key = $value;     
            }

            // echo '<pre>';
            // print_r($categories);
            // echo '</pre>';

            // echo $pageTitle;

           require (self::VIEW_FOLDER_NAME .'/'. str_replace('.','/', $viewPart).'.php');
        }

        protected function loadModel($modelName)
        {
            require (self::MODEL_FOLDER_NAME .'/'.$modelName.'.php');
        }
    }

?>
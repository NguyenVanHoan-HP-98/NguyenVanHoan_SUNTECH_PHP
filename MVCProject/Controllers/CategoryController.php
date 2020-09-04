<?php
    class CategoryController extends BaseController{
   
        public function index()
        {
            $pageTitle ='Nguyễn Văn Hoan';
            $categories = [
                [
                'id'=> 1,
                'name'=> 'Laptop'
                ],
                [
                'id'=> 2,
                'name'=> 'PC'
                ],
                [
                    'id'=> 3,
                    'name'=> 'Điện Thoại'
                ]
            ];
            return $this -> view('frontend.categories.index',[
                'categories' => $categories,
                'pageTitle'  => $pageTitle,
            ]);
        }
        public function show()
        {
            echo __METHOD__;
        }

    }
?>
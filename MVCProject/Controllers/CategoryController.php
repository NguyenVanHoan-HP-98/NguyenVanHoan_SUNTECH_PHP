<?php
    class CategoryController extends BaseController{

        private $categoriesModel;
        public function __construct()
        {
            $this->loadModel('CategoriesModel');
            $this -> categoriesModel = new CategoriesModel();
        }
   
        public function index()
        {
            //$selectcolumn = ['*'];
            //$orderby = [];

            $getcategories = $this->categoriesModel -> getAll();//$selectcolumn,$orderby);     
            
            return $this -> view('frontend.categories.index',[
                'getcategories' => $getcategories,
                
            ]);
        }
        // Show ra 1 bản ghi
        public function show()
        {
            $id = $_GET['id'];
            $getfindBYID = $this->categoriesModel->findById($id);
            echo '<pre>';
            print_r($getfindBYID);
            echo '</pre>';
            // return $this -> view('frontend.categories.index',[
            //     'getfindBYID' => $getfindBYID 
            // ]);
        }
        public function update()
        {
            $id = $_GET['id'];
            $data = [
                'name'=>'Văn Hoan1',
            ];
           if($this->categoriesModel -> updateData($id,$data))
           {
            return $this-> view('frontend.categories.index',[
                'pagetitle'=>'Danh sách sản phẩm',
                'kq'=> 'Cập nhật thành công',
            ]);
           } 
           else{
            return $this-> view('frontend.categories.index',[
                'pagetitle'=>'Danh sách sản phẩm',
                'kq'=> 'Cập nhật không thành công',
            ]);
           }
        }

        public function delete()
        {
            $id = $_GET['id'];
            $this->categoriesModel->destroy($id);
        }

    }
?>
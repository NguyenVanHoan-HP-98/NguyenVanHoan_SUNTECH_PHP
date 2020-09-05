<?php
    class ProductController extends BaseController
    {
        private $productModel;

        public function __construct()
        {
            $this->loadModel('ProductModel');
            // Tạo 1 đối tượng có kiểu là Produc ở trong thứ mục Models file ProductModel.php
            $this-> productModel = new ProductModel();
        }

         public function index()
        {   
            //echo $this-> productModel->getAll(); 
            $productfind = $this->productModel ->findByID(1);

            $selectcolumn = ['id','name'];
            $orderby = ['column'=>'id' , 'type' => 'desc'];

            $getproduct = $this->productModel -> getAll($selectcolumn,$orderby);     
            return $this-> view('frontend.products.index',[
              'pagetitle'=>'Danh sách sản phẩm',
              'productfind' => $productfind,
              'getproduct' => $getproduct,
          ]);
        }

        public function show()
        {
            //echo __METHOD__;
        }
        
        //Thêm dữ liệu vào trong bảng.
        public function store()
        {
            $data = [
                'name'=>'Văn Hoan',
                'price' => 350,
                'image' => NULL, 
                'categor_id'=>1,
            ];
            $this -> productModel -> store($data);
        }

        public function update()
        {
            $id = $_GET['id'];
            $data = [
                'name'=>'Văn Hoan1',
                'price' => 360,
                'image' => NULL, 
                'categor_id'=>1,
            ];
           if($this->productModel -> updateData($id,$data))
           {
            return $this-> view('frontend.products.index',[
                'pagetitle'=>'Danh sách sản phẩm',
                'kq'=> 'Cập nhật thành công',
            ]);
           } 
           else{
            return $this-> view('frontend.products.index',[
                'pagetitle'=>'Danh sách sản phẩm',
                'kq'=> 'Cập nhật không thành công',
            ]);
           }

        }

        public function delete()
        {
            $id = $_GET['id'];
            $this->productModel->destroy($id);
        }
    }
        
?>
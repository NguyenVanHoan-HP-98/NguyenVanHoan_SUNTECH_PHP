<?php
    class ProductController extends BaseController
    {
        private $productModel;
        public function __construct()
        {
            $this->loadModel('ProductModel');
            $this-> productModel = new Product();
        }
         public function index()
        {   
            echo $this-> productModel->getAll(); 
            $productfind = $this->productModel ->findByID(1); 
            
            return $this-> view('frontend.products.index',[
              'pagetitle'=>'Danh sách sản phẩm',
              'productfind' => $productfind,
          ]);
        }
        public function show()
        {
            echo __METHOD__;
        }
    }
        
?>
<h1>Produc Model Name</h1>
<?php
    class Product{
        const TABLE = 'product';

        public function getAll()
        {
            return __METHOD__;
        }
        public function findById($id)
        {
            return [
                'id'=>1,
                'name' =>'Văn Hoan'
            ];

        }
        public function Delete()
        {
            return __METHOD__;
        }
    }


?>
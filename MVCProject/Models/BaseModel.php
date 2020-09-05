<?php
//Những Model nào kế thừ từ Base Model đều chạy hàm khởi dựng của cha nó.
    class BaseModel extends Database {

        protected $connect;

        public function __construct()
        {
           // echo __METHOD__;

            $this->connect = $this ->connect();
        }

        // Lấy ra tất cả dữ liệu trong bảng
        public function All($table, $select = ['*'] , $oderby = [])
        {

            // $select = ['*'] danh sách các cột cần select nếu không có nó sẽ là *
            $column = implode(',',$select);
            $oderbyString = implode(' ',$oderby);
            //die($oderbyString);

            if($oderby != NULL)
            {
                $sql = 'SELECT '.$column.' FROM '.$table.' ORDER BY '.$oderbyString.'';  
            }
            else
            {

                $sql = 'SELECT '.$column.' FROM '.$table.'';
            }

            
            $query = $this -> _query($sql);

            //var_dump($query);
            
            $data = [];
            while($row = mysqli_fetch_assoc($query))
            {
               // var_dump($row);
               array_push($data,$row);
            }        
            return $data;
        }

        // Lấy ra một bản ghi 
        public function find($table, $id)
        {
            $sql = 'SELECT *FROM '.$table.' WHERE id = '.$id.'';
            $query = $this -> _query($sql);
            return mysqli_fetch_assoc($query);
        }

        // Thêm dữ liệu vào bảng 
        public function create($table,$data = [])
        {
            $column = implode(',',array_keys($data));
            $newvalues = implode(',' , array_map(function($value) {return "'".$value."'" ;}, array_values($data))); 
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            $sql = "INSERT INTO ${table}(${column}) VALUES(${newvalues})";
            return $this->_query($sql);

        }

        // Update dữ liệu vào trong bảng
        public function update($table , $id , $data)
        {
            $dataset = [];
            foreach($data as $key => $value)
            {
                array_push($dataset,"${key} = '".$value."'");
            }
            $result = implode(',',$dataset);

            $sql ="UPDATE ${table} SET ${result} WhERE id = $id"; 

            $kq =  $this->_query($sql);

            return $kq;
        }

        // Xóa dữ liệu tỏng bảng
        public function delete($table,$id)
        {
            $sql = "DELETE FROM $table WHERE id = $id";
            $this->_query($sql);
        }

        public function _query($sql)
        {
           return  mysqli_query($this->connect,$sql);
            
        }
    }

?>
<?php
    class CategoriesModel extends BaseModel{
        const TABLE = 'categories';

        public function getAll($select = ['*'], $oderby = [])
        {
           return $this->All(self::TABLE , $select , $oderby);
        }
        public function findById($id)
        {
            return $this->find(self::TABLE,$id);
        }

        public function updateData($id,$data = [])
        {
          return $this -> update(self::TABLE, $id ,$data);
        }
        
        public function destroy($id)
        {
           $this->delete(self::TABLE, $id);
        }
    }


?>
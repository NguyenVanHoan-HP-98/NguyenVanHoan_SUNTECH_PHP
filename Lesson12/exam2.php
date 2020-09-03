<?php
    class Person{
        protected $name = 'Nguyễn Văn A';
        public $emial = 'HGhfhjsd';
    }

    class Student extends Person{
        public function getName()
        {
            return $this->name;
        }
    }

    $student1 = new Student();
    echo $student1->getName();
?>
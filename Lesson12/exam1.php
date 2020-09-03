<?php
    class Student{
        protected $name = 'Nguyễn Văn A';
        public $email = 'vanhoan98.hp@gmail.com';

        public function getName()
        {
           return $this -> name;
        }
    }

    $student1 = new Student;
    echo $student1-> getName();
    echo $student1-> email;
?>
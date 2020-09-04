<?php

class Person
{
	protected $name = 'Nguyễn Mạnh Hùng';

	protected $phone = '0942376433';
}

class Student extends Person
{
	public function getName()
	{
		return $this->name;
	}
}

$student1 = new Student;

echo $student1->getName();
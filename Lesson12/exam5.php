<?php

class Student
{
	static $name = 'Nguyễn Văn A';

	static function getName()
	{
		return __METHOD__;
	}
}

echo Student::getName();
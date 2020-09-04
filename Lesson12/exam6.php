<?php

class Animal
{
	final public function sounding()
	{
		return 'Qui định tiếng kêu';
	}
}

class Cat extends Animal
{
	public function getSounding()
	{
		return 'Meo Meo';
	}
}

$cat = new Cat;

echo $cat->getSounding();
<?php

interface Swimming
{
	function canSwimming();
}

interface Fly
{
	function canFly();
}

interface Running
{
	function canRun();
}

abstract class Animal
{
	abstract function head();
	abstract function eye();
}

class Cat extends Animal implements Running
{
	public function head()
	{
		return __METHOD__;
	}

	public function eye()
	{

	}

	public function canRun()
	{
		
	}
}

class Bird extends Animal implements Fly
{
	public function head()
	{
		return __METHOD__;
	}

	public function eye()
	{
		
	}

	public function canFly()
	{

	}
}

class Dog extends Animal implements Running, Swimming
{
	public function head()
	{
		return __METHOD__;
	}

	public function eye()
	{
		
	}

	public function canRun()
	{

	}

	public function canSwimming()
	{
		return __METHOD__;
	}
}

$dog = new Dog;
echo $dog->canSwimming();
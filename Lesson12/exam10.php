<?php

abstract class Xe
{
	abstract function banhXe();
	abstract function khungXe();
	abstract function phanhXe();

	public function getColor()
	{
		return __METHOD__;
	}
}

class XeMay extends Xe
{
	public function banhXe()
	{
		return __METHOD__;
	}

	public function khungXe()
	{
		return __METHOD__;
	}

	public function phanhXe()
	{
		return __METHOD__;
	}
}

$xeMay = new XeMay;
echo $xeMay->getColor();
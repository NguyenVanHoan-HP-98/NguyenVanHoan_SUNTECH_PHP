<?php

class Database
{
	const HOST_NAME = 'localhost';

	const USER_NAME = 'root';

	const PASSWORD  = '';

	const DB_NAME   = 'phpclass15';

	public function getHostName()
	{
		return self::HOST_NAME;
	}
}

echo Database::USER_NAME;

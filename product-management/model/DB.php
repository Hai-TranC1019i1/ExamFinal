<?php

namespace Project\model;
use PDO;

class DB
{
    private const DSN_DB = 'mysql:host=localhost;dbname=product_management';
    private const USER_DB = 'root';
    private const PASS_DB = "@Haitran123";

    private function __construct()
    {
    }

    public static function connect()
    {
        return new PDO(self::DSN_DB, self::USER_DB, self::PASS_DB);
    }
}
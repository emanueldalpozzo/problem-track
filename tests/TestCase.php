<?php

namespace Tests;

use Core\Constants\Constants;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

class TestCase extends FrameworkTestCase
{
    public function setUp(): void
    {
 //executado antes de cada teste

        $this -> clearDatabase();
    }

    public function tearDown(): void
    {
        $this -> clearDatabase();
    }

    private function clearDatabase(): void
    {
        $file = Constants::databasePath() . $_ENV['DB_NAME'];
        if (file_exists($file)) {
            unlink($file);
        }
    }
}

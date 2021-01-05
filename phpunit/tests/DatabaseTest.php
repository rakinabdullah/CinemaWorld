<?php

use PHPUnit\Framework\TestCase;
class DatabaseTest extends Testcase{
    public function testExample()
    {
        $this->assertDatabaseHas('adminLogin', ['username'=>"admin"]);

        $this->assertDatabaseHas('adminLogin', ['password'=>"1a1dc91c907325c69271ddf0c944bc72"]);
    }
}

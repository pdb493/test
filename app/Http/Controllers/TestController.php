<?php

namespace App\Http\Controllers;

class TestController
{
    public function test(): void
    {
        $x = random_bytes(14);
    }
}

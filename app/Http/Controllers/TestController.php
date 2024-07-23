<?php

namespace App\Http\Controllers;

class TestController
{
    public function test(): void
    {
        // this will result in a Semgrep result
        $x = random_bytes(14);
    }
}

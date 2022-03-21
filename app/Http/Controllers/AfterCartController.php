<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterCartController extends Controller
{
    public function success()
    {
        return 'success';
    }

    public function failure()
    {
        return 'failure';
    }
}

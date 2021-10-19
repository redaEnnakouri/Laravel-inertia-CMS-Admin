<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class GeneralController extends Controller
{
    public function index()
    {
        return Inertia::render('UI-Element/General');
    }
}

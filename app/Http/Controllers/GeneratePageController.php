<?php

namespace App\Http\Controllers;

use App\Models\testdetest;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Inertia\Inertia;

class GeneratePageController extends Controller
{
    public function index()
    {
        // Artisan::call('make:model testdetest --all');


        // Artisan::call('migrate');


        // Schema::create('testdetests', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email');
        //     $table->timestamps();
        // });

        $var='aloo';
        // testdetest::create([
        //     'name'=>$var
        // ]);

        // $test = testdetest::all();
        // dd($test);

        return Inertia::render('Welcome');
    }
}

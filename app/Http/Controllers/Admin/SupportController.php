<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }
}
https://www.youtube.com/watch?list=PLVSNL1PHDWvQ1N6fqhQ5HQzFtN-xrkjNU&v=7I_uIELCbu4

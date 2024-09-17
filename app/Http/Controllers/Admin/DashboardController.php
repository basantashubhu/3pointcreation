<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $menuItems = MenuItem::query()->with([
            'posts' => fn($q) => $q->orderBy('seqno'),
        ])->orderBy('seqno')->get();
        return view('admin.dashboard', compact('menuItems'));
    }
}

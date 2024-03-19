<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalUserActive = User::where('status', 'active')->count();
        $totalProduct = Product::count();
        $totalProductActive = Product::where('status', 'active')->count();
        $newProduct = Product::orderBy('created_at', 'DESC')->limit(4)->get();
    
        return view('dashboard.index', compact('totalUser', 'totalProduct', 'newProduct','totalUserActive', 'totalProductActive'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

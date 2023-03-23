<?php

namespace App\Http\Controllers;

use App\Models\AdminSportsShow;
use Illuminate\Http\Request;

class AdminSportsShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_sports_shows/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminSportsShow $adminSportsShow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminSportsShow $adminSportsShow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminSportsShow $adminSportsShow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminSportsShow $adminSportsShow)
    {
        //
    }
}

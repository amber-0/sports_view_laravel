<?php

namespace App\Http\Controllers;

use App\Models\SportsShow;
use Illuminate\Http\Request;

class SportsShowController extends Controller
{

	// 初期画面
	public function index()
	{
			return view('user_sports_shows/user_index');
	}

	// メキシコvs日本の画面
	public function mexico_vs_japan()
	{
		return view('user_sports_shows/mexico_vs_japan');
	}

	// formの画面
	public function form()
	{
		return view('user_sports_shows/form');
	}


	public function create()
	{
			//
	}


	public function store(Request $request)
	{
			//
	}


	public function show(SportsShow $sportsShow)
	{
		return view('user_sports_shows/user_show');
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(SportsShow $sportsShow)
	{
			//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, SportsShow $sportsShow)
	{
			//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(SportsShow $sportsShow)
	{
			//
	}
}

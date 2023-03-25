<?php

namespace App\Http\Controllers;

use App\Models\SportsShow;
use Illuminate\Http\Request;
use App\Models\AdminSportsShow;

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

	// formの画面（createの役割）
	public function form()
	{
		$sports_shows = SportsShow::selectRaw('COUNT(id) as count')
		->get();
		return view('user_sports_shows/form',compact('sports_shows'));
	}


	public function create()
	{
			//
	}


	public function store(Request $request)
	{
			// dd($request);
		SportsShow::create([
			'name' => $request->name,
			'select_team' =>$request->select_team,
			'japan_score' => $request->japan_score,
			'mexico_score' => $request->mexico_score,
			'cheer' => $request->cheer,
			'yen' => $request->yen,
			'comment' => $request->comment,
		]);

		return to_route('user.show');

	}


	public function show(SportsShow $sportsShow)
	{
		// 全データ
		$sports_shows = SportsShow::all('name','select_team','japan_score','mexico_score','cheer','yen','comment');
		// カウント数
		$count_nums = SportsShow::selectRaw('COUNT(id) as count')
		->get();
		// 投げ銭の合計額
		$yen_sums = SportsShow::selectRaw('SUM(yen) as sum')
		->get();

		// 円グラフ用データ
		$predictions = SportsShow::selectRaw('select_team, count(*) as total')
		->groupBy('select_team')
		->get();
		$labels = $predictions->pluck('select_team')->toArray();
		$data = $predictions->pluck('total')->toArray();

		// 棒グラフ用データ
		$bar_graphs = SportsShow::selectRaw('cheer, count(*) as total')
		->groupBy('cheer')
		->get();
		$bar_labels = $bar_graphs->pluck('cheer')->toArray();
		$bar_data = $bar_graphs->pluck('total')->toArray();

		return view('user_sports_shows/user_show', compact('sports_shows', 'count_nums', 'yen_sums', 'predictions', 'labels', 'data', 'bar_labels', 'bar_data'));
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

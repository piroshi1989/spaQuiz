<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ranking;
use Illuminate\Support\Facades\DB;


class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weekRanking = Ranking::with('user')
        ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id, rankings.created_at'))
        ->whereBetween('rankings.created_at', [now()->startOfWeek()->format('Y-m-d'), now()->endOfWeek()->format('Y-m-d')])
        ->limit(5)
        ->orderby('percentage_correct_answer', 'desc')
        ->groupBy('rankings.user_id')
        ->get();
  
      $weekRankingData = [
        'percentage_correct_answer' => $weekRanking->pluck('percentage_correct_answer')->all(),
        'name' => $weekRanking->pluck('user.name')->all()
      ];
  
      $monthRanking = Ranking::with('user')
        ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id, rankings.created_at'))
        ->whereBetween('rankings.created_at', [now()->startOfMonth()->format('Y-m-d'), now()->endOfMonth()->format('Y-m-d')])
        ->limit(5)
        ->orderby('percentage_correct_answer', 'desc')
        ->groupBy('rankings.user_id')
        ->get();
  
      $monthRankingData = [
        'percentage_correct_answer' => $monthRanking->pluck('percentage_correct_answer')->all(),
        'name' => $monthRanking->pluck('user.name')->all()
      ];

      $totalRanking = Ranking::with('user')
      ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id'))
      ->limit(5)
      ->orderby('percentage_correct_answer', 'desc')
      ->groupBy('rankings.user_id')
      ->get();

    $totalRankingData = [
      'percentage_correct_answer' => $totalRanking->pluck('percentage_correct_answer')->all(),
      'name' => $totalRanking->pluck('user.name')->all()
    ];

        return ['weekRankingData' => $weekRankingData, 'monthRankingData' => $monthRankingData, 'totalRankingData' => $totalRankingData];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (Auth::user)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

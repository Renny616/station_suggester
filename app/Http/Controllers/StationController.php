<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        return view('station.index');
    }

    public function findStation(Request $request)
    {
        $station1 = $request->input('station1');
        $station2 = $request->input('station2');

        // 駅間の所要時間を計算し、適切な駅を提案するロジックをここに実装
        $suggestedStation = $this->calculateOptimalStation($station1, $station2);

        return view('station.result', [
            'station1' => $station1,
            'station2' => $station2,
            'suggestedStation' => $suggestedStation,
        ]);
    }

    private function calculateOptimalStation($station1, $station2)
    {
        // ここにAPI呼び出しや計算ロジックを実装
        // 現時点ではダミーデータを返します
        return 'Shibuya'; // 例: 提案された駅名
    }
}

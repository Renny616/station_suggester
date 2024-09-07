<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleMapsService;

class StationController extends Controller
{
    protected $googleMapsService;

    public function __construct(GoogleMapsService $googleMapsService)
    {
        $this->googleMapsService = $googleMapsService;
    }

    public function index()
    {
        return view('station.index');
    }

    public function findStation(Request $request)
    {
        $station1 = $request->input('station1');
        $station2 = $request->input('station2');

        // 提案する駅リスト（仮のデータ例）
        $potentialStations = ['Tokyo Station', 'Shibuya Station', 'Shinjuku Station'];

        // 各駅への所要時間を取得
        $optimalStation = null;
        $smallestTimeDifference = PHP_INT_MAX;

        foreach ($potentialStations as $station) {
            $timeFromStation1 = $this->googleMapsService->getTravelTime($station1, $station);
            $timeFromStation2 = $this->googleMapsService->getTravelTime($station2, $station);

            if ($timeFromStation1 !== null && $timeFromStation2 !== null) {
                $timeDifference = abs($timeFromStation1 - $timeFromStation2);

                if ($timeDifference < $smallestTimeDifference) {
                    $smallestTimeDifference = $timeDifference;
                    $optimalStation = $station;
                }
            }
        }

        return view('station.result', [
            'station1' => $station1,
            'station2' => $station2,
            'suggestedStation' => $optimalStation,
        ]);
    }
}

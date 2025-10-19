<?php

use App\Models\Football_fixture;

    if(!function_exists('define_wperc'))
    {
        function define_wperc($leaguesapi_id, $season, $betsapi_id, $bet_value)
        {
            // ----------------------------------------------------------- Initialize

            // ----------------------------------------------------------- Action  
                $betsapi     = Football_fixture::select(  
                                    'football_fixtures.leaguesapi_id', 
                                    'football_fixtures.season',  
                                    'football_mybets.betsapi_id',   
                                    'football_mybets.bet_value',   
                                    DB::raw('ROUND(SUM(CASE WHEN status = "Win" THEN 1 ELSE 0 END) / COUNT(CASE WHEN status IS NOT NULL THEN 1 END) * 100, 2) as wperc'), 
                                )
                                ->join('football_mybets', 'football_fixtures.fixturesapi_id', '=', 'football_mybets.fixturesapi_id') 
                                ->join('football_bookmakers', 'football_bookmakers.bookmakersapi_id', '=', 'football_mybets.bookmakersapi_id') 
                                ->where('football_fixtures.fixture_date', '<=', DB::raw('DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)')) 
                                ->where('football_mybets.model_range', 'like', 'Leagueseason') 
                                ->where('football_fixtures.leaguesapi_id', '=', $leaguesapi_id) 
                                ->where('football_fixtures.season', '=', $season)  
                                ->where('football_mybets.betsapi_id', '=', $betsapi_id) 
                                ->where(function ($query) {
                                    $query->where('football_mybets.win_percentage', '>=', 100)
                                        ->orWhere('football_mybets.lose_percentage', '>=', 100)
                                        ->orWhere(function ($subQuery) {
                                            $subQuery->where('football_mybets.betsapi_id', '=', 38)
                                                    ->where('football_mybets.win_percentage', '>=', 75);
                                        });
                                })
                                ->groupBy(  
                                    'football_fixtures.leaguesapi_id', 
                                    'football_fixtures.season',  
                                    'football_mybets.betsapi_id',   
                                    'football_mybets.bet_value',   
                                ) 
                                ->orderBy('wperc','desc') 
                                ->one();

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

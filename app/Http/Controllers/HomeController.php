<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; 
use Detection\MobileDetect;  
use Illuminate\View\View; 

class HomeController extends Controller
{
    //
    public $template    = 'apland_v512';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Home';
    public $type        = 'frontend';
 
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    { 
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $detect = new MobileDetect();

            if ($detect->isMobile()) { $additional_view = "Mobile";
            } elseif ($detect->isTablet()) { $additional_view = "Tablet";
            } else { $additional_view = "Desktop"; }
        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action  
            $data           = array(); 
        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    
    /**
     * index
     *
     * @return View
     */
    public function aimodel($aimodel): View
    { 
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $detect = new MobileDetect();

            if ($detect->isMobile()) { $additional_view = "Mobile";
            } elseif ($detect->isTablet()) { $additional_view = "Tablet";
            } else { $additional_view = "Desktop"; }
        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'aimodel';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action    
            $data_aim           = DB::table('football_ai_models')
                                    ->get(); 

            $data               = DB::table('football_fixtures')
                                        ->join('football_league_season_bookmakers', function($join) {
                                            $join->on('football_fixtures.leaguesapi_id', '=', 'football_league_season_bookmakers.leaguesapi_id')
                                                ->on('football_fixtures.season', '=', 'football_league_season_bookmakers.season');
                                        }) 
                                        ->join('football_leagues', 'football_fixtures.leaguesapi_id', '=', 'football_leagues.leaguesapi_id') // Join football_leagues
                                        ->join('football_bookmakers', 'football_league_season_bookmakers.bookmakersapi_id', '=', 'football_bookmakers.bookmakersapi_id') // Join football_bookmakers
                                        ->select(
                                            'football_leagues.country_name',
                                            'football_fixtures.leaguesapi_id',
                                            'football_fixtures.season',
                                            'football_bookmakers.bookmakersapi_id', 
                                            DB::raw('football_leagues.name as league_name'),
                                            DB::raw('football_bookmakers.name as book_name'),
                                            DB::raw('football_league_season_bookmakers.total_'.$aimodel. ' as total'),
                                            DB::raw('football_league_season_bookmakers.win_percentage_'.$aimodel. ' as win_percentage'),
                                            DB::raw('football_league_season_bookmakers.lose_percentage_'.$aimodel. ' as lose_percentage'), 
                                        ) 
                                        ->whereBetween(DB::raw('DATE_ADD(football_fixtures.fixture_date, INTERVAL 7 HOUR)'), [
                                            DB::raw('DATE_SUB(NOW(), INTERVAL 2 HOUR)'),
                                            DB::raw('DATE_ADD(NOW(), INTERVAL 24 HOUR)')
                                        ])
                                        ->where('football_league_season_bookmakers.total_'.$aimodel, '>', 1)
                                        ->where('football_league_season_bookmakers.win_percentage_'.$aimodel, '>=', 90)
                                        ->whereNotNull('football_league_season_bookmakers.win_percentage_'.$aimodel) 
                                        ->orderByDesc('football_league_season_bookmakers.win_percentage_'.$aimodel, 'Desc')
                                        ->get();
        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'data',
                    'data_aim'
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}

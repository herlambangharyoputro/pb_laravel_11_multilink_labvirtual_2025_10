<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

<?php
use App\Models\Aboutapp;

    if(!function_exists('define_aboutapp'))
    {
        function define_aboutapp($status)
        {
            // ----------------------------------------------------------- Initialize
                $data = Aboutapp::findOrFail(define_aboutapp_team());

                $link   = '/storage/aboutapp';
                $link2  = '/starter';
            // ----------------------------------------------------------- Action
                if($status == 'name')
                {
                    $isi = $data->name;
                }
                elseif($status == 'title')
                {
                    $isi = define_aboutapp_teamname(define_aboutapp_team()).' | '.$data->name;
                } 
                elseif($status == 'logo')
                {
                    if(!is_null($data->logo))
                    {
                        $isi = '<img
                                src="'.asset($link.'/'.$data->logo).'"
                                alt="" height="100" />';
                    }
                    else
                    {
                        $isi = '<img
                                src="'.asset($link2.'/logo.png').'"
                                alt="" height="20" />';
                    }
                }
                elseif($status == 'logo_home_link')
                {
                    if(!is_null($data->logo_home))
                    {
                        $isi = asset($link.'/'.$data->logo_home);
                    }
                    else
                    {
                        $isi = '';
                    }
                }
                elseif($status == 'ico')
                {
                    if(!is_null($data->ico))
                    {
                        $isi = '<link
                                rel="icon"
                                type="image/x-icon"
                                href="'.asset($link.'/'.$data->ico).'"
                                >';
                    }
                    else
                    {
                        $isi = '<link
                                rel="icon"
                                type="image/x-icon"
                                href="'.asset($link2.'/ico.ico').'"
                                >';
                    }
                }
                elseif($status == 'color')
                {
                    $isi = $data->color;
                }
                elseif($status == 'mode')
                {
                    $isi = $data->mode;
                }
                elseif($status == 'domain')
                {
                    $isi = $data->domain;
                }
                elseif($status == 'is_showed')
                {
                    $isi = $data->is_showed;
                } 
                elseif($status == 'super')
                {
                    if($data->current_team_id == 1)
                    {
                        $isi = '
                        <br/>
                        <span class="badge bg-danger "
                            style="min-width: 60px;">
                            Super
                        </span>';
                    }
                }
                elseif($status == 'mobile')
                {
                    $isi = $data->uiux_mobile;
                }
                elseif($status == 'tablet')
                {
                    $isi = $data->uiux_tablet;
                }
                elseif($status == 'google')
                {
                    $isi = $data->auth_google;
                }
                elseif($status == 'github')
                {
                    $isi = $data->auth_github;
                }
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_aboutapp_team'))
    {
        function define_aboutapp_team()
        {
            // ----------------------------------------------------------- Initialize
                $isi = 1;

            // ----------------------------------------------------------- Action

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
 
    if(!function_exists('define_aboutapp_sidebar'))
    {
        function define_aboutapp_sidebar()
        {
            // ----------------------------------------------------------- Initialize
                $id_team = define_aboutapp_team();

                $route_link = route('Aboutapp.edit', $id_team);

                $is_showed = define_aboutapp('is_showed');

                $isi = "";
            // ----------------------------------------------------------- Action
                if($is_showed != 0)
                {
                    $isi .= '<div class="menu-item @if($title == "Aboutapp") active @endif">';
                    $isi .= '<a href="'.$route_link.'" class="menu-link">';
                    $isi .= '<span class="menu-icon">';
                    $isi .= '<i class="fab fa-superpowers"></i>';
                    $isi .= '</span>';
                    $isi .= '<span class="menu-text">';
                    $isi .= 'Aboutapp';
                    $isi .= '</span>';
                    $isi .= '</a>';
                    $isi .= '</div>';
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_aboutapp_teamname'))
    {
        function define_aboutapp_teamname($id)
        {
            // ----------------------------------------------------------- Initialize
                if($id == 1) { $isi = "Super"; } 
                else{ $isi = "No Data"; }

            // ----------------------------------------------------------- Action

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 

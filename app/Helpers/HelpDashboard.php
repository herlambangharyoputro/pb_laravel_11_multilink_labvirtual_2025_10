<?php

use App\Models\Pengajuan_pkl;

    if(!function_exists('define_button_dashboad_pengajuanpkl'))
    {
        function define_button_dashboad_pengajuanpkl($user_id)
        {
            // ----------------------------------------------------------- Initialize
                $data       = Pengajuan_pkl::findorfail_user_id($user_id);

                $isi        = '';

                $link_route     = "Pengajuanpkl.create";
            // ----------------------------------------------------------- Action
                if(is_null($data))
                {
                    $isi .= '<div class="d-flex justify-content-center">';
                    $isi .= '<a ';
                    $isi .= 'href="'.route($link_route).'"';
                    $isi .= 'class="btn btn-lg btn-primary rounded-pill">';
                    $isi .= '<i class="fas fa-file-signature"></i> Pengajuan PKL';
                    $isi .= '</a>';
                    $isi .= '</div>';
                }
                else
                {
                    $link_route2    = "Pengajuanpkl.show";

                    $isi .= '<div class="list-group">';
                    $isi .= '<div class="list-group-item d-flex align-items-center">';
                    $isi .= '<div class="w-40px h-40px d-flex align-items-center justify-content-center ms-n1">';
                    $isi .= '<i class="fas fa-briefcase"></i>';
                    $isi .= '</div>';
                    $isi .= '<div class="flex-fill ps-3">';
                    $isi .= '<h5 class="mb-1">';
                    $isi .= $data->judul;
                    $isi .= '</h5>';
                    $isi .= '<div>';
                    $isi .= $data->mitra;
                    $isi .= '</div>';
                    $isi .= '</div>';
                    $isi .= '<div>';
                    $isi .= '<div class="form-check me-n1">';
                    $isi .= '<a href="'.route($link_route2, $data->uuid).'" >';
                    $isi .= '<div class="w-40px h-40px d-flex align-items-center justify-content-center ms-n1">';
                    $isi .= '<i class="fas fa-cog fa-lg text-primary"></i>';
                    $isi .= '</div>';
                    $isi .= '</a>';
                    $isi .= '</div>';
                    $isi .= '</div>';
                    $isi .= '</div>';
                    $isi .= '</div>';
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

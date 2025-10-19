<?php

    if(!function_exists('define_tanggal'))
    {
        function define_tanggal($tanggal)
        {
            // ----------------------------------------------------------- Initialize

            // ----------------------------------------------------------- Action
                $bulanIndonesia = [
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember',
                ];

                $tanggal    = strtotime($tanggal);
                $bulan      = $bulanIndonesia[date('n', $tanggal)];
                $isi        = date('d', $tanggal) . " " . $bulan . " " . date('Y', $tanggal);

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('define_tanggal_angka'))
    {
        function define_tanggal_angka($tanggal)
        {
            // ----------------------------------------------------------- Initialize
                $tanggal    = strtotime($tanggal);

            // ----------------------------------------------------------- Action 
                $isi        = date('d', $tanggal) . "-" .date('n', $tanggal) . "-" . date('Y', $tanggal);

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }
    
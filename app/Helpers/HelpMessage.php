<?php

    if(!function_exists('define_messages'))
    {
        function define_messages($message)
        {
            // ----------------------------------------------------------- Initialize

            // ----------------------------------------------------------- Action
                if($message == 'saved_data')
                {
                    $isi = 'All your changes have been saved.';
                }
                elseif($message == 'logout')
                {
                    $isi = 'You have been logged out.';
                }
                elseif($message == 'delete_data_warning')
                {
                    $isi = 'Are you sure you want to delete this record?';
                }
                elseif($message == 'testing_algorithm')
                {
                    $isi = $message;
                }
                elseif($message == 'failed_data')
                {
                    $isi = 'Data Failed to be Saved.';
                }
                elseif($message == 'delete_data')
                {
                    $isi = 'Data successfully deleted.';
                }
                elseif($message == 'have_no_access')
                {
                    $isi = 'You do not have permission to access this Page.';
                }
                elseif($message == 'call_authorized')
                {
                    $isi = 'Contact PIA (Seftin Fitri Ana Wati, S.Kom., M.Kom.) for account registration confirmation.';
                }
                elseif($message == 'login')
                {
                    $user = auth()->user();

                    $isi = 'Welcome back, '.$user->name.'!';
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

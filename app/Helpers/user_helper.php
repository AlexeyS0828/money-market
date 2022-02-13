<?php
    use App\Models\UserModel;

    if(!function_exists('select_user'))
    {
        function select_user($id = null) {
            $userModel = new UserModel();
            $data = $userModel->where('user_id', $id)->first();
            $session = session();
            $session->set(['selected_user_id' => $id, 'selected_user_name' => $data['user_firstName'] . ' ' . $data['user_lastName']]);
            return $data;
        }
    }

    if(!function_exists('get_selected_user'))
    {
        function get_selected_user() {
            $session = session();
            $id = $session->get('selected_user_id');
            $userModel = new UserModel();
            $data = $userModel->where('user_id', $id)->first();
            return $data;
        }
    }

    if(!function_exists('get_user_balance'))
    {
        function get_user_balance() {
            $userModel = new UserModel();
            $session = session();
            $user = $userModel->where('user_id', $session->get('id'))->first();
            return [
                'user_cashBalance'=>$user['user_cashBalance'],
                'user_portfolioGain'=>$user['user_portfolioGain'],
            ];
            
        }
    }

   
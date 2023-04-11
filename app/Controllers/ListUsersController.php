<?php

namespace App\Controllers;

use App\Models\UserModel;

class ListUsersController extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['user_detail'] = $model->orderBy('id', 'DESC')
            ->findAll();

        return view('list', $data);
    }
}

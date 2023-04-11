<?php

namespace App\Controllers;

use App\Models\UserModel;

class DeleteUserController extends BaseController
{
    public function index(int $id)
    {
        $model = new UserModel();
        $delete = $model->where('id', $id)->delete();

        if ($delete) {
            echo json_encode(array("status" => true));
        } else{
            echo json_encode(array("status" => false));
        }
    }
}

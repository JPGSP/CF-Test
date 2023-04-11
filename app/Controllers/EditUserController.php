<?php

namespace App\Controllers;

use App\Models\UserModel;

class EditUserController extends BaseController
{
    public function index(int $id)
    {
        $model = new UserModel();

        $data = $model->where('id', $id)->first();

        if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
}

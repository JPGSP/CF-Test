<?php

namespace App\Controllers;

use App\Models\UserModel;

class UpdateUserController extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $model = new UserModel();

        $id = $this->request->getVar('hdnStudentId');

        $data = [
            'firstname' => $this->request->getVar('txtFirstName'),
            'lastname'  => $this->request->getVar('txtLastName'),
            'username'  => $this->request->getVar('txtUsername'),
            'email'     => $this->request->getVar('txtEmail'),
            'password'  => $this->request->getVar('txtPwd'),
            'mobile'    => $this->request->getVar('txtMobile'),
        ];

        $save = $model->update($id, $data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
}

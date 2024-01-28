<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data   =   [
            'title'     =>  'Dashboard'
        ];

        $renderT    =   \Config\Services::renderer();
        return $renderT->setData( $data )->render( 'Pages/Dashboard' );
    }

    public function getData()
    {
        $userModel  =   new UserModel();
        $data       =   $userModel->asObject()->findAll();

        return json_encode( $data );
    }
}

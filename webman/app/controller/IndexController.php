<?php

namespace app\controller;

use app\model\User;
use support\Request;

class IndexController
{
    public function index(Request $request)
    {
        return json([
            'code' => 200,
            'msg'  => 'success',
            'data' => [],
        ]);
    }
    
    public function singleQuery(Request $request)
    {
        $id = 1;
        $user = User::query()->find($id);
        return json([
            'code' => 200,
            'msg'  => 'success',
            'data' => $user,
        ]);
    }
}

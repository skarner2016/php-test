<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return response()->json([
            'code' => 200,
            'msg' => 'success',
            'data' => [],
        ]);
    }

    public function singleQuery()
    {
        $id = 1;
        $user = User::query()->find($id);

        return response()->json([
            'code' => 200,
            'msg' => 'success',
            'data' => $user,
        ]);
    }
}

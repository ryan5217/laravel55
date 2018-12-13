<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 2018/12/11
 * Time: 16:54
 */

namespace App\Http\Controllers\Api;

use App\User;

class IndexController extends BaseApiController
{
    public function index()
    {
//        return $this->response->errorNotFound();
//
//        return $this->response->error('This is an error.', 404);

        $users = User::paginate(25);
        return response()->json($users,201);

        return $this->response->paginator($users);

        $user = User::all();
        return $this->response->created();

        return $this->response->array($user->toArray());
        return $user;
        echo '怎么出错了呢';
    }
}
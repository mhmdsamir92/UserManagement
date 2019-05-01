<?php
/**
 * Created by PhpStorm.
 * User: cdc
 * Date: 01-May-19
 * Time: 7:14 PM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController
{
    /**
     * returns all the users in the db in json format
     * @return false|string
     */
    public function index()
    {
        $user = User::all();
        return json_encode($user);
    }

    /**
     * updates a user with the given parameters
     * @param User $user
     * @param Request $request
     * @return false|string
     */
    public function update(User $user, Request $request)
    {
        $user->update($request->all());
        return json_encode($user);
    }
}
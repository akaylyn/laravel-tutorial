<?php

class UserController extends BaseController {

    public function getIndex()
    {
        //
    }

    public function postProfile()
    {
        //
    }

    public function getProfile($profile_id)
    {
        $user = User::where('id', '=', $profile_id)->first();
        return View::make('profile')->with('user', $user);
    }
}


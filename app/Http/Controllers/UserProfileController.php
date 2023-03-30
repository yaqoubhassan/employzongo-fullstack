<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserProfileResource;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth('api')->user();
        return new UserProfileResource($user);
    }
}

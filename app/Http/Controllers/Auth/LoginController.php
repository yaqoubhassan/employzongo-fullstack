<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Http\Resources\Auth\UserResource;
use App\Http\Requests\Auth\LoginUserRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginUserRequest $request)
    {
        if (auth('web')->attempt($request->validated())) {
            $user = User::find(auth('web')->user()->id);

            if (!$user->email_verified_at) {
                event(new Registered($user));
                return response()->json([
                    'message' => 'User not verified. Check email for verification link'
                ]);
            }

            $tokenObj = $user->createToken('employzongo', [], now()->addDays(365));

            return response()->json([
                'token' => $tokenObj->plainTextToken,
                'token_type'   => 'Bearer',
                'token_expiration'  => $tokenObj->accessToken->expires_at,
                'email_verified' => (bool) $user->email_verified_at,
                'user' => new UserResource($user)
            ]);
        } else {
            return response()->json(['error' => 'Invalid login credentials'], 401);
        }
    }
}

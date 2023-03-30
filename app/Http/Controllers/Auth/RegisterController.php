<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Resources\Auth\UserResource;
use App\Http\Requests\Auth\RegisterUserRequest;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterUserRequest $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['password'] = Hash::make($request->input('password'));
            $user = User::create($input);

            $tokenObj = $user->createToken('employzongo', [], now()->addDays(365));
            $token = $tokenObj->plainTextToken;

            DB::commit();
            event(new Registered($user));

            return response()->json([
                'token' => $token,
                'token_type' => 'Bearer',
                'token_expiration' => $tokenObj->accessToken->expires_at,
                'user' => new UserResource($user)
            ], 200);
        } catch (\Exception $exception) {
            DB::rollback();
            Log::error(['message' => $exception->getMessage()]);

            return response()->json([
                'message' => $exception->getMessage(),
            ], 500);
        }
    }
}

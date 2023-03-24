<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\SendVerificationCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Http\Resources\Auth\RegisteredUserResource;

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

            $tokenObj = $user->createToken('employzongo');
            $token = $tokenObj->plainTextToken;


            event(new Registered($user));
            DB::commit();

            return response()->json([
                'token' => $token,
                'token_type' => 'Bearer',
                'user' => new RegisteredUserResource($user)
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

<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;

class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request)
    {
        $userId = $request->route('id');
        $user = User::findOrFail($userId);

        $redirectUrl = 'http://127.0.0.1:8000/verified';

        if (!hash_equals((string) $request->route('id'), (string) $user->getKey())) {
            return view('verification.failure', [
                'message' => 'Authorization failed! ID mismatch',
                'redirectUrl' => $redirectUrl
            ]);
        }

        if (!hash_equals((string) $request->query('hash'), sha1($user->getEmailForVerification()))) {
            return view('verification.failure', [
                'message' => 'Authorization failed! Hash mismatch',
                'redirectUrl' => $redirectUrl
            ]);
        }

        if ($user->hasVerifiedEmail()) {
            return view('verification.failure', [
                'message' => 'User email already verified!',
                'redirectUrl' => $redirectUrl
            ]);
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
            return view('verification.success', [
                'message' => 'Email verified successfully!',
                'redirectUrl' => $redirectUrl,
            ]);
        }
    }

    public function resend(Request $request)
    {
        $user = User::find($request->user()->id);

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'message'   => 'User email already verified!'
            ], 422);
        }

        //Send notification
        $user->sendEmailVerificationNotification();

        return response()->json([
            'data' => [
                'message'   => 'Verification email has been resent!',
            ],
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PhoneVerificationController extends Controller
{
    public function resendToken()
    {
        $user = auth()->user();

        // Check if the token can be resent (to avoid spamming)
        if (Carbon::now()->lessThan($user->pcode_expired_at)) {
            return response()->json(['error' => 'Please wait before requesting another token.']);
        }

        $user->generatePhoneVerificationToken();

        return response()->json(['success' => 'A new verification token has been sent to your phone!']);
    }
    public function showVerificationForm()
    {
        $user = auth()->user();

        if (!$user->phone_verification_code) {
            $user->generatePhoneVerificationToken();
        }

        return view('auth.phone-verify');
    }

    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->phone_verification_code !== $request->token) {
            return back()->withErrors(['token' => 'Invalid verification token.']);
        }

        // if (Carbon::now()->greaterThan($user->pcode_expired_at)) {
        //     return back()->withErrors(['token' => 'The verification token has expired.']);
        // }

        $user->pcode_expired_at = null;
        $user->phone_verified_at = now();
        $user->save();

        return redirect()->route('user.dashboard')->with('status', 'Phone number verified successfully!');
    }
}

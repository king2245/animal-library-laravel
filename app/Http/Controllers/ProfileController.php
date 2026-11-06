<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function calculateAwesomeness(Request $request)
    {
        $user = $request->user();

        $score = strlen($user->name) * rand(5, 25);

        return response()->json([
            'user' => $user->name,
            'awesomeness_score' => $score,
            'status' => $score > 100 ? 'Legend' : 'Normal Human',
        ]);
    }



    public function profileOracle()
    {
        $predictions = [
            'You will fix a bug today.',
            'A missing semicolon watches you.',
            'Your next deployment will be surprisingly smooth.',
            'The database remembers everything.',
            'An unexpected null value approaches.'
        ];

        return response()->json([
            'message' => $predictions[array_rand($predictions)]
        ]);
    }
}

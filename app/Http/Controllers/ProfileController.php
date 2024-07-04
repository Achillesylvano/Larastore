<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    { 
        return view('user.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validated = $this->handleData($request);
        // $request->user()->fill($validated);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->update($validated);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
  
    }

    /**
     * Remove the specified resource from storage.
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

        return Redirect::to('/login')->with('status','User-deleted');
    }

    private function handleData(ProfileUpdateRequest $request): array
    {
        $data = $request->validated();
        $user = $request->user();

        /**
         * @var UploadedFile|null $image
         */
        $avatar = $request->validated('avatar');
        if($avatar === null || $avatar->getError()){
            return $data;
        }
        if($user->avatar){
            Storage::disk('public')->delete($user->avatar);
        }
        $data['avatar'] = $avatar->store('avatar','public');
        return $data;
    }
}

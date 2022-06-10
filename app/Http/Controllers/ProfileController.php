<?php

namespace App\Http\Controllers;

use App\Actions\StoreImageAction;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request, StoreImageAction $storeImageAction)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update($request->validated());


        if ($request->hasFile('avatar')) {

            if (auth()->user()->avatar)  unlink("images/profile/" . auth()->user()->avatar);
            $avatar =  auth()->id() . '-' . $request->first_name . '-' . $request->last_name . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images/profile'), $avatar);
            auth()->user()->update(['avatar' => $avatar]);
        }

        toast('Profile Updated Succesfully', 'success');

        return redirect()->back();
    }
}

<?php

namespace App\Actions;

use App\Http\Requests\ProfileUpdateRequest;

class StoreImageAction
{
  public function execute(ProfileUpdateRequest $request)
  {

    if (auth()->user()->avatar)  unlink("images/profile" . auth()->user()->avatar);

    if ($request->hasFile('avatar')) {
      $avatar =  auth()->id() . '-' . $request->first_name . '-' . $request->last_name . '.' . $request->avatar->getClientOriginalExtension();
      $request->avatar->move(public_path('images/profile'), $avatar);
      auth()->user()->update($request->safe()->only('avatar'));
    }
  }
}

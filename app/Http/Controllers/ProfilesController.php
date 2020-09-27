<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
      return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {

      abort_if($user->isNot(auth()->user()), 404);

      return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
      $request->validate([
        'username' => [
          'string',
          'required',
          'max:255',
          'alpha_dash',
          Rule::unique('users')->ignore($user)
        ],

        'name' => [
          'string',
          'required',
          'max:255'
        ],

        'email' => [
          'string',
          'required',
          'email',
          'max:255',
          Rule::unique('users')->ignore($user)
        ],

        'avatar' => 'required|file',

        'password' => [
          'string',
          'required',
          'min:8',
          'max:255',
          'confirmed'
        ]
      ]);

      $data = $request->except(['password', 'password_confirmation', 'avatar']);
      $data['password'] = bcrypt($request->password);

      if ($request->avatar) {
        Image::make($request->avatar)
        ->resize(300, null, function($constraint) {
          $constraint->aspectRatio();
        })
        ->save(public_path('uploads/avatars/' . $request->avatar->hashname()));

        $data['avatar'] = $request->avatar->hashName();
      }

      $user->update($data);
      return redirect(route('profile', $user));
    }
}

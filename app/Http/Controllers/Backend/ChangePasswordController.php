<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'new_password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:new_password'],
        ]);

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->route('users.index')->with('message', 'User Password Updated Successfully!');
    }
}

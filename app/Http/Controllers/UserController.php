<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id) {

        $user = User::where('id', $id)->first();
        return view('layouts.user.profile', compact('user'));
    }


    public function editProfile($id) {

        $user = User::where('id', $id)->first();
        return view('layouts.user.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, $id) {

        if(empty($request->file('image'))){
        $user = User::where('id', $id)->first();

        $user->update([
        'name'      => $request->name,
        'email'     => $request->email,
        'telepon'   => $request->telepon,
        'address'   => $request->address,
        ]);

        return redirect()->route('profile', $id);
    } else {
        $user = User::where('id', $id)->first();
        $user->update([
        'name'      => $request->name,
        'email'     => $request->email,
        'telepon'   => $request->telepon,
        'address'   => $request->address,
        'image'     => $request->file('image')->store('image'),
        ]);

        return redirect()->route('profile', $id);
    }
    }

    public function userList() {

        $users = User::all();
        return view('layouts.user.list', compact('users'));
    }

    public function deleteProfile($id) {
        User::where('id', $id)->delete();
        return redirect()->route('user.list')->with('success', 'Data pengguna berhasil dihapus!');
    }
}

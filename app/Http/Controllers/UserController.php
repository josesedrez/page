<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all()->sortByDesc('updated_at');

        $allUsers = $users->chunk(5);

        return view('users.list', compact('allUsers'));
    }

    public function updateProfileImage(UserValidation $request, User $user)
    {
        $profileName = $this->uploadFileAndGetName($request->file('profile'), 'profiles');

        $user->update([
            'profile' => $profileName
        ]);

        return redirect(route('users.profile'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (is_null($request->file('profile'))) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            return redirect(route('users.profile'));
        }

        $profileName = $this->uploadFileAndGetName($request->file('profile'), 'profiles');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'profile' => $profileName
        ]);

        return redirect(route('users.profile'));
    }

    public function changePassword(User $user)
    {
        return view('users.password', compact('user'));
    }

    public function updatePassword(UserValidation $request, User $user)
    {
        if (Hash::check($request->password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->newPassword)
            ]);

            return redirect(route('users.profile'));
        }

        return redirect()->back()->withErrors(['wrongPassword' => 'A senha informada está errada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

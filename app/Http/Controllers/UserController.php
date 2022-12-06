<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $request->validate([
            'name' => 'required|min:5|string|max:30|unique:users,name',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|',
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
        ]);

        return redirect()->route('dashboard')->with('status', 'Nouvel utilisateur ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:5|string|max:30|',
            'email' => 'required|email|',
            'password' => 'required|string|min:8|',
            'is_admin' => 'required|'
        ]);
        // allow to change users role 
        if($user){
            $user->is_admin = $request->is_admin;
            $user->update();
        }
        // allow to update password and hashed password if not the case
        if (empty($request['password'])) {
            $user->update($request->except('password'));
        } else {
            $request['password'] = Hash::make($request['password']);
            $user->update($request->all());
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => $request->is_admin,
            'updated_at' => now(),
        ]);

        return redirect()->route("dashboard")->with('status', "Le compte a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("dashboard")->with('status', "Le compte a été supprimé");
    }

    public function allUsers()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.all-users', compact('users'));
    }
}

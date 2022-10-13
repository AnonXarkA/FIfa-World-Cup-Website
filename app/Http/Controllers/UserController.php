<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['users'] = User::all();
        return view('user', $data)->with('no', 1);
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
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:200',
            'email' => 'required|unique:users,email',
            'password' => 'required|same:confirm_password|max:100',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if ($user) {
            return redirect()->route('users.index')->with('success', 'User Added Successfully!');
        }
        return redirect()->route('users.index')->with('error', 'Failed to Create User!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepass(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'oldpassword' => 'required',
            'password' => 'required|same:confirm_password',
        ]);

        if($validate->fails()){ return back()->withErrors($validate)->withInput(); }

        $user = User::find($id);
        if (Hash::check($request->oldpassword, $user->password)) {
            if (!Hash::check($request->password, $user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->route('users.index', $id)->with('success', 'Password changed successfully!');
            } else {
                return back()->with('error', 'New password can not be the old password!');
            }
        } else {
            return back()->with('error', 'Old password doesn\'t matched');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:200',
            'email' => 'required|unique:users,email,' . $id,
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->isDirty()) {
            $user->update();
            return redirect()->route('users.index')->with('success', 'User Updated Successfully!');
        }
        return redirect()->route('users.index')->with('error', 'Nothing Changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('error', 'User Deleted Successfully');
    }
}

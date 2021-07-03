<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Carbon\Carbon;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user_id = Auth::user()->id;
        $user =  User::find($user_id);
        return view('profile.index', compact('user'));
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
        $rules = [
            'name' => 'required',
            'email' => 'required',
        ];
        $user_id = $request->query('user_id');
        $docs = '';

        if ($request->profile_picture) {
            $files = User::where('id', $user_id)->first();
            if ($files !== null && file_exists($files['profile_picture'])) {
                unlink($files->profile_picture);
            }
            $file = $request->file('profile_picture');
            $docs = $file->getClientOriginalName();
            $file->move('assets/img/', $docs);
            $profile = User::find($user_id);
            $profile->profile_picture = 'assets/img/'.$docs;
        } else {
            $files = User::find($user_id);
            $docs = $files['profile_picture'];
        }
            $profile->name = $request->name;
            $profile->email = $request->email;
            if($request->password){
                $profile->password = bcrypt($request->password);
            }
            

            $profile->name = $request->name;
            $profile->updated_at = Carbon::now();
            $profile->save();

            return redirect()->back()->with('success','Operation Success');
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
        //
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

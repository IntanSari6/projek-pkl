<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageTeacherDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('manage-teacher-data.index', [
            'user' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/manage-teacher-data.create', [
            'user' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->nip = $request->nip;
        $user->subjects = $request->subjects;
        $user->gender = $request->gender;
        $user->is_admin = $request->is_admin;
        if ($request->file('image')) {
           
            $user->image = $request->file('image')->store('public');
        }
        $user->save();

        return redirect('/manage-teacher-data')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('manage-teacher-data.index', [
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = $user::where('id',$id)->first();
        // dd($lab);
        return view('/manage-teacher-data.edit', [
            'user' => $user
        ]);
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
        // $validateData['user_id'] = auth()->user()->id;

        // $edit = User::find($user);
        // $edit->update([
        //     'name'=>$request->input('name'),
        //     'email'=>$request->input('email'),
        //     'password'=>$request->input('password'),
        //     'nip'=>$request->input('nip'),
        //     'subjects'=>$request->input('subjects'),
        //     'gender'=>$request->input('gender'),
        //     'is_admin'=>$request->input('is_admin'),
        //     'image'=>$request->input('image'),
        // ]);

        $rules =([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'nip' => 'required|unique:users',
            'subjects' => 'required',
            'gender' => 'required',
            'is_admin' => 'required',
            'image' => 'image|file|max:1024',
        ]);
        
        $validateData = $request->validate($rules);
        $validateData['password']=bcrypt($request->password);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('public');
        }



        User::where('id', $id)
            ->update($validateData);

        return redirect('/manage-teacher-data/'.$id)->with('success','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/manage-teacher-data')->with('success','Data Berhasil Dihapus');
    }
}

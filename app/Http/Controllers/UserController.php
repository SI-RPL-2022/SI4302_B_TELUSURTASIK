<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Hash;


class UserController extends Controller
{
    public function showUserData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',0)
            ->get();
        return view('DataUser')->with([
    		'title' => 'Data User',
            'data' => $user
    	]);

    }

    public function showMitraData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',1)
            ->get();
        return view('DataMitra')->with([
    		'title' => 'Data Mitra',
            'data' => $user
    	]);

    }

    public function UpdateUserData($id) {

        $user = userModel::find($id);

        return view('EditDataMitraUser')->with([
            'title' => 'Edit Data',
            'data' => $user
        ]);
        
    
    }

    public function EditUserData(Request $request)
    {
        
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);

        return redirect('DataUser');
    }  
    
    public function DeleteDataUser($id) {

        DB::table('users')->where('id',$id)->delete();

        return redirect('DataUser');
    }

    public function DeleteDataMitra($id) {

        DB::table('users')->where('id',$id)->delete();

        return redirect('DataMitra');
    }
        // ini nampilin profile yang awal
    // public function showProfile($id) {

    //     $user = DB::table('users')
    //         ->select('*')
    //         ->where('id',$id )
    //         ->get();
    //     return view('customer.home.EditProfileUser')->with([
    //         'data' => $user


    //     ]);    

        
    // }
    
    // public function EditProfileUser(Request $request)
    // {
        
    //     DB::table('users')->where('id',$request->id)->update([
    //         'name' => $request->name,
    //         'no_hp' => $request->no_hp
          
    //     ]);

    //     return redirect('customer/home/EditProfileUser');  

        


        // $request->validate([
        //     'name'=> ['required'],
        //     'no_hp' => ['required']
            
        // ]);

        // auth()->user()->update([
        //     'name' => $request->name,
        //     'no_hp' => $request->no_hp,

        // ]);

        // return back()->with('message','your profile has been updated');

        
        
    // }


    // public function EditProfileUser(Request $request, $id)
    // {
    //     $users = UserModel::find($id);
    //     $users->name = $request->name;
    //     $users->no_hp = $request->no_hp;
        
    //     $users->save();

    //     return redirect('customer/home/index');
    // }


    public function showProfile($id)
    {
        $user = UserModel::find($id);
        return view('customer.home.EditProfileUser', compact('user'));
    }

    public function EditProfileUser(Request $request)
    {
        $request -> validate([
            'name'=> ['required','unique:users,name'],
            'no_hp'=> ['required'],
        ]);

        Auth()->user()->Update([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
        ]);

        return back()->with('message','Your profile has been updated');
    }

    public function showEditPasswordUser()
    {
        return view('customer.home.EditPasswordUser');
    }


    public function EditPasswordUser(Request $request)
    {

        if(!(Hash::check($request->get('current_password'), Auth()->user()->password))) {
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('password')) == 0) {
            return back()->with('error','Your current password cannot be same with the new password');
        }

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required'],
        ]);
        $user = Auth()->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return back()->with('message','Pasword changed succesfully');
    }

    // backup2 controller edit password
    // public function EditPasswordUser(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required'],
    //         'password' => ['required'],
    //     ]);

    //     if(Hash::check($request->current_password, Auth()->user()->password)) {
    //         Auth()->user()->update(['password' => Hash::make($request->password)]);
    //         return back()->with('message','your Password has been updated');
    //     }

    //     throw ValidationException::withMessages([
    //     'current_password' => 'Your current password does not match with our record']);
    // }

}

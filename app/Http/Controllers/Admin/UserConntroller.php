<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.user.all' ,compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $data = $request->all();
        $result =[
            'name' => ['required' , 'string' , 'min:3' , 'max:24'],
            'email' => ['required'],
            'address' => ['required' , 'string' , 'min:3' , 'max:24'],
            'phone' => ['required'],
            'role_id' => ['required'],
            'password' => ['required'],
        ];
        $valdtion = Validator::make($data , $result);
        if($valdtion->fails()){
            return redirect()->back()->withErrors($valdtion)->withInput($data);
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->role_id = $request->input('role_id');
        $user->password = Hash::make($request->input('password'));
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time().'.'.$fileExpans;
            $file->move('admin_panel/assets/img/',$fileName);
            $user->image = $fileName; 
        }
        
        $user->save();
        return redirect()->back()->with('stusas' , 'data Is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('admin.user.show' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit' , compact('user'));
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
        $user = User::findOrFail($id);

        $data = $request->all();
        $result =[
            'name' => ['required' , 'string' , 'min:3' , 'max:24'],
            'email' => ['required'],
            'address' => ['required' , 'string' , 'min:3' , 'max:24'],
            'phone' => ['required'],
            'password' => ['required'],
        ];
        $valdtion = Validator::make($data , $result);
        if($valdtion->fails()){
            return redirect()->back()->withErrors($valdtion)->withInput($data);
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        if($request->hasFile('image')){
            $destmion = 'admin_panel/assets/img/'.$user->image;
            if(File::exists($destmion)){
                File::delete($destmion);
            }
            $file = $request->file('image');
            $fileExpans = $file->getClientOriginalName();
            $fileName = time() .'.'.$fileExpans;
            $file->move('admin_panel/assets/img/',$fileName);
            $user->image = $fileName; 
        }
        $user->update();
        return redirect()->back()->with('stusas' , 'data Is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('stusas' , 'data Is Deleted');
        
    }
}

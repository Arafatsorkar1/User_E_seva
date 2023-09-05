<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Profile;
use Illuminate\Http\Request;

class  ProfileController extends Controller
{
    private $inform;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('Front.HomePage.profile',[
            'user'=>auth()->user(),
//            'information' => Profile::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        return view('Front.User.edit',[
            'info' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    public function update(Request $request, $id)
    {
        self::$imageFile = $request->file('image');
        self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
        self::$imageDirectory = 'assets/img/upload/';
        self::$imageFile->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        $user = User::findOrFail($id);
        $user->update([
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'image'=> self::$imageUrl,


        ]);
        return redirect()->route('user.profile.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

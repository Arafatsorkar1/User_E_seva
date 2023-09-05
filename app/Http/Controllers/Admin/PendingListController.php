<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PendingListController extends Controller
{
    protected $user;
    public  function pending()
    {
        $user = User::where('type','user')->latest()->get();
        return view('Admin.user.paindingTable',compact('user'));
    }

    public function approveUser($id)
    {
         $user = User::findOrFail($id);

         $user->status = 'approve';
         $user->save();

        return redirect()->back();
    }

    public  function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success','Unknown User Delete Successfully');

    }

}

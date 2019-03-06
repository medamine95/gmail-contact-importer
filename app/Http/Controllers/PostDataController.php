<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PostDataController extends Controller
{
    //
    public function getData()
     {
        //$id = Auth::user()->id;
      //  $user = User::find($id);

        return Auth::user()->contactlist;


}
}

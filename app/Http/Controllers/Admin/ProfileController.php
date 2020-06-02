<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

  public function add()
  {
      return view('admin.profile.home');
  }

  public function edit(Request $request)
  {
    $profile =Profile::find($request ->id);
    return view('admin.profile.edit', ['profile_form' => $profile]);
  }

}
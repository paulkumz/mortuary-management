<?php

namespace hospital\Http\Controllers;


use hospital\Models\Entry;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function getProfile($id)
   {
   	dd($id);
   }
}
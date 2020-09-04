<?php

namespace App\Http\Controllers;

use App\Owner;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
  public function index (Request $request)
  {
      $items = Owner::all();
      return view ('owner.index', compact('items'));
  }
}

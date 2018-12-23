<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Original;
use Auth;

class OriginalsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index')); //index以外でauthミドルウェア適用
    }

    public function index()
    {
      $originals = Original::orderBy('created_at', 'DESC')->get();

      return view('originals.index')->with('originals', $originals);
    }

    public function create()
    {
      return view('originals.create');
    }

    public function store(Request $request) //storeアクションが動くと、originalテーブルにレコードが保存される
    {
      Original::create(
        array(
          'image' => $request->image,
          'user_id' => Auth::user()->id
        )
      );
      return view('originals.store');
    }

    public function edit($id)
    {
      $original = Original::find($id);

      return view('originals.edit')->with('original', $original);
    }

    public function update($id, Request $request)
    {
      Original::find($id)->update(
       array(
         'image' => $request->image
       )
      );

      return view('originals.update');
    }

    public function destroy($id)
    {
      if(Original::find($id)->user_id == Auth::user()->id) {
        Original::destroy($id);
      }

      return view('originals.destroy');
    }
}

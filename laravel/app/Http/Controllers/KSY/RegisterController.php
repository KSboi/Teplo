<?php

namespace App\Http\Controllers\KSY;

use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;

	
class RegisterController extends Controller
{
	public function Write(Request $request){
	
		DB::table('KSY')->insert(['parrent' =>$request->parrent,'child' =>$request->child,
		'years'=>$request->years,'situation'=>$request->situation,'question'=>$request->question,
		'email'=>$request->email,'phone'=>$request->phone]);
		return redirect('/ksy/main');
	}
}
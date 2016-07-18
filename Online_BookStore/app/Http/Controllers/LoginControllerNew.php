<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Login_table;
use Illuminate\Http\Request;
use Session;
use App\Users_Book;
class LoginControllerNew extends Controller {
     // $p=$_GET["q"];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 return view('books.Home_MainPage',compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
		public function login(Request $request)
	{//aindha??pani
		echo "helloooooo";
		$Logusers=Login_table::all();
		
		foreach ($Logusers as $key => $value) {
			# code...
			//echo $value->login_id;

			if($value->login_id==$request->Uid){

				if($value->password==$request->password )
				{
				   	echo "Successfully Logged in ";
					// session()->regenerate();
					// session(['lid' => ($value->login_id]);
					Session::put('log_id',$value->login_id);
					Session::put('paswd',$value->password);
					$users=Users_Book::all();
					return view('books.dashboard',compact('users'));

				}
				else
				{
					// echo "Invalid Id and Password";
					// return view('books.loginPage',compact('books'));
				}
			}
			else
			{
				// echo "Invalid Id";
				// return view('books.loginPage',compact('books'));
			}
		}
		 return view('books.loginPage',compact('books'));
	}


}

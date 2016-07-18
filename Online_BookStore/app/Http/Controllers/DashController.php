<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Users_Book;
use App\Login_table;
use App\Uploads;
class DashController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users=Users_Book::all();
		return view('books.dashBoard',compact('books'));
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
	public function update(Request $request, $Uid)
	{
		//
		$users= Users_Book::find($request->$Uid);//where Demo is the Demo.php in app folder
		// $users1=  Login_table::find($request->$Uid);//where Demo is the Demo.php in app folder

			$users->Uid=$request->Uid;
			$users->UName=$request->Uname;
			$users->Age=$request->Uage;
			$users->Sex=$request->Usex;//
			$users->Qualification=$request->UQualification;
			$users->Email_Id=$request->Uemail;
			$users->Date_of_Birth=$request->Udob;
			// $users1->login_id=$request->Uid;
			// $users1->password=$request->pwd;
			$users->save();
			// $users1->save();
			return view('books.dashBoard');
	}
	/*
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function MyDashBoard()
	{
 		$value = Session::get('log_id');
      if($value)
      {
        echo $value;
		$users=Users_Book::all();
		return view('books.dashboard',compact('users'));
	}
	else
	{
		return view('books.loginPage');

	}
	}

	public function general()
	{
$value = Session::get('log_id');
      if($value)
      {
        echo $value;
		return view('books.general');
	}
	else
	{
		return view('books.loginPage');

	}	

	}
	public function History()
	{
		
$value = Session::get('log_id');
      if($value)
      {
        echo $value;
        $users_uploads=Uploads::all();
		return view('books.History',compact('users_uploads'));
	}
	else
	{
		return view('books.loginPage');

	}
	}
	public function Upload()
	{
	
$value = Session::get('log_id');
      if($value)
      {
        echo $value;
		return view('books.Uploads');
	}
	else
	{
		return view('books.loginPage');

	}	}
}

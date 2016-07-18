<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users_Book;
use Illuminate\Http\Request;
use App\Login_table;

class RegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

	return view('books.Registration_Form');
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
	public function store(Request $request)
	{
		//idi storing
		echo "string";
		$users= new Users_Book;//where Demo is the Demo.php in app folder
				$users1= new Login_table;//where Demo is the Demo.php in app folder

			$users->Uid=$request->Uid;
			$users->UName=$request->Uname;
			$users->Age=$request->Uage;
			$users->Sex=$request->Usex;//
			$users->Qualification=$request->UQualification;
			$users->Email_Id=$request->Uemail;
			$users->Date_of_Birth=$request->Udob;
			$users1->login_id=$request->Uid;
			$users1->password=$request->pwd;
			$users->save();
				$users1->save();
				
		echo "Registration Successful";
		return view('books.loginPage');
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
	public function direct()
	{
		//
		return view('books.Registration_Form');
	}
}

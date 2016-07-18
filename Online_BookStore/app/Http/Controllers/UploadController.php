<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use File;
use Validator;
use Redirect;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Validation\Factory;
use App\Uploads;
use App\Book;
use Carbon\Carbon;
use Session;
// use Users_book;

class UploadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
public function upload(Request $request)
	{
		// echo "string";
		// dd($request->all());
		$value = Session::get('log_id');
		$mytime=Carbon::now();
		$books=new Book;
		$books_User=new Uploads;
		$books->Bid=$request->Bid;
		$books->BName=$request->BName;
		$books->BAuth_Name=$request->BAuth_Name;
		$books->BCategory=$request->BCategory;
		$books->Uploaded_TimeDate=$mytime->toDateTimeString();
		$books_User->Uid=$value;
		$books_User->Bid=$request->Bid;
		$books_User->Uploaded_at=$mytime->toDateTimeString();

		echo "in upload";
		if (Input::hasFile('fileup')){
		echo "uploaded";
		$file = Input::file('fileup');
	
		$path=$file->move('uploads', $file->getClientOriginalName());
		echo $file->getClientOriginalName();		
	
		$books->save();
		$books_User->save();
		return view('books.general');
	}
	}
}

<?php namespace App\Http\Controllers;
use App\Book;
use App\Http\Requests;
use App\Http\Response;
use App\Http\Controllers\Controller;
use Input as Input;
use Illuminate\Http\Request;
use Session;
class HomeBookController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// $Books=Book::all();
		return view('books.Home_MainPage');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	  * @return Response
	 */
	public function create()
	{
		//
		return view('books.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Book= new Book;//where Book is the Book.php in app folder
		$Book->id=$request->id;
		$Book->Name=$request->name;
		$Book->Age=$request->age;
		$Book->save();		
       		// $Book= Book::Create($input);
		// $Book->save();
 		 return redirect('bookMain');
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	$Book=Book::find($id);
	if($Book)
	return $Book;
	else
		echo "not found----";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Book= Book::find($id);

		//return $Book;
		 return view('books.edit',compact('Book',$Book));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$Book= Book::find($id);
		$Book->id=$request->id;
		$Book->Name=$request->name;
		$Book->Age=$request->age;
		$Book->save();

		return redirect('bookMain');

	}
public function Login_page()
	{
		
		return redirect('books.loginPage');

	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Book::destroy($id);
		return redirect('Book');
	}
	public function loginfn()
	{
		# code...
		//echo "in loginfn";
		// $keyword = Input::get('keyword');
		// return $keyword; 	
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
	public function login(Request $request)
	{
		
		echo "helloooooo";
		$Logusers=Book::all();
		foreach ($Logusers as $key => $value) {
			# code...
			if($Logusers->login_id==$request->user)
			{
				echo "here true";
			return view('books.Home_MainPage',compact('books'));

			}
			else
			{
				echo "failed condition";
			}
		}
		return view('books.Home_MainPage',compact('books'));
	}
//idi ostundaha ila avuthundi no error
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Book extends Model {

	//
	protected $fillable=[
			'Uid',
			'UName',
			'Age',
			'Sex',
			'Qualification',
			'Email_Id',
			'Date_of_Birth'

	];
	protected $table='users__books';

	public $timestamps=false;


}

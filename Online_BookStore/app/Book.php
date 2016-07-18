<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	//
	protected $fillable=[
			'Bid',
			'BName',
			'BAuth_Name',
			'BCategory',

			'Uploaded_TimeDate'

	];
	protected $table='books';

	public $timestamps=false;

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model {

	//
	protected $fillable=[
			'Uid',
			'Bid',
			'Uploaded_at'

	];
	protected $table='Uploads';

	public $timestamps=false;


}

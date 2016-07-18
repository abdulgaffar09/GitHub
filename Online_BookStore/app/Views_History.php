<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Views_History extends Model {

	//
	protected $fillable=[
			'Uid',
			'Bid',
			'View_date',
			'rating'



	];
	protected $table='Views_History';

	public $timestamps=false;

}

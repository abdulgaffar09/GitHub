<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_table extends Model {//iddeya got it 
	// inthe kada inkekada prob? ndku ala ostundi nakem telusu ardhamkadamledu
	//adey Book pettanu HomeBookController adi avuthundi

	//oiieee antha crct eh undi ga?? 
	protected $fillable=[
			'login_id',
			'password',

	];
	protected $table='login_tables';

	public $timestamps=false;


}

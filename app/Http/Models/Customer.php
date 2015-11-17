<?php namespace Models;
use Validator;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Eloquent {
	use  SoftDeletes;

	protected $guarded 				= array();
	protected $table 				= 'customers';
	protected $fillable 			=	[
											'kode_customer',
											'nama',
											'alamat', 
											'nomor_hp',
											'nomor_rumah',
											'nama_toko'
										];
	protected $rules				= 	[
											'kode_customer' 			=> 'required',
											'nama' 						=> 'required|max:255|min:2',
											'alamat' 					=> 'required|min:2',
											'nomor_hp' 					=> 'max:15|min:8',
											'nomor_rumah' 				=> 'max:15|min:5',
											'nama_toko' 				=> 'max:255|min:2'
										];										
	protected $errors 				=	[];

	/* ---------------------------------------------------------------------------- RELATIONSHIP ---------------------------------------------*/

	/* ---------------------------------------------------------------------------- SCOPE -------------------------------------------------------------------------------*/

	/* ---------------------------------------------------------------------------- ERRORS ----------------------------------------------------------------------------*/
	/**
	 * return errors
	 *
	 * @return MessageBag
	 * @author 
	 **/
	function getError()
	{
		return $this->errors;
	}	
}
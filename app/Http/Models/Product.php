<?php namespace Models;
use Validator;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Eloquent {
	use  SoftDeletes;

	protected $guarded 				= array();
	protected $table 				= 'products';
	protected $fillable 			=	[
											'kode_barang',
											'merk',
											'size', 
											'base',
										];
	protected $rules				= 	[
											'kode_barang' 				=> 'required',
											'merk' 						=> 'required',
											'size' 						=> 'required',
											'base' 						=> 'required',
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
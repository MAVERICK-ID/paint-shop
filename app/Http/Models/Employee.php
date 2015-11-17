<?php namespace Models;
use Validator;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Eloquent {
	use  SoftDeletes;

	protected $guarded 				= array();
	protected $table 				= 'employees';
	protected $fillable 			=	[
											'username',
											'password',
											'nama', 
											'akses',
										];
	protected $rules				= 	[
											'username' 					=> 'required',
											'password' 					=> 'required',
											'nama' 						=> 'required|min:2|max:255',
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
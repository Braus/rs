<?php

class RealEstate extends Eloquent {

	protected $table = 'realestate';

	protected $guarded = ['id'];
	public static $rules = array(
		'streetNumber'=>'required',
		'streetName'=>'required',
		'streetSufix'=>'required',
		'suburb'=>'required',	
		'postcode'=>'required',	
		'state'=>'required'
		);
	
	public function realestateimage()
	{
		return $this->hasMany('RealEstateImage','realestateId');
	}
	
	public function realestatereview()
	{
		return $this->hasMany('RealEstateReview','realestateId');
	}
}
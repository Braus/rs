<?php

class RealEstateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$rs_orderby = RealEstate::orderBy('created_at', 'Desc')->paginate(5);

		return View::make('realestate.index')
			->with('realestate',  $rs_orderby );
		 
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('realestate.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		//Reflection::export(new ReflectionClass('Reales')); exit(); 

		$v = Validator::make($input, RealEstate::$rules);
		
		if ($v->passes())
		{
			$realestate = new RealEstate;

			$realestate->id = Input::get('id');
			$realestate->streetNumber = Input::get('streetNumber');
			$realestate->unitNumber = Input::get('unitNumber');
			$realestate->streetName = Input::get('streetName');
			$realestate->streetSufix = Input::get('streetSufix');
			$realestate->houseType = Input::get('houseType');
			$realestate->suburb = Input::get('suburb');
			$realestate->postcode = Input::get('postcode');
			$realestate->state = Input::get('state');
			$realestate->save();

			// Save into Real Estate Image table
			$realestateimage = new RealEstateImage;

			
			if (Input::hasFile('fileName')){
				$file= Input::file('fileName');
				$destinationPath = public_path().'/img/';
				$filename        = str_random(6).'_'.$file->getClientOriginalName();
        				$uploadSuccess   = $file->move($destinationPath, $filename);
				$realestateimage->fileName = $filename;
			}
			
			$realestateimage->realestateId = $realestate->id;
			$realestateimage->save();

			// Save into Real Estate Review table
			$realestatereview = new RealEstateReview;

			$realestatereview->realestateId = $realestate->id;
			$realestatereview->contractStart = Input::get('contractStart');			
			$realestatereview->contractEnd = Input::get('contractEnd');
			$realestatereview->realEstate = Input::get('realEstate');
			$realestatereview->cost = Input::get('cost');
			$realestatereview->reason = Input::get('reason');
			$realestatereview->comment = Input::get('comment');
			$realestatereview->reviewDate = date('d / m / Y');
			$realestatereview->save();


			return Redirect::route('addRealEstate'); 
		}

		return Redirect::back()->withErrors($v);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$realestate = RealEstate::with('realestateimage', 'realestatereview' )->get();
		$rs = $realestate->find($id);
		//$realestate = Realestate::orderBy('created_at', 'Desc')->paginate(3);

		return View::make('realestate.show')
			->with('realestate', $rs);
			//->with('title', 'Show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

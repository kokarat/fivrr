<?php

use \SEOstats\Services as SEOstats;
class SEOstatsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            //return View::make('seostats.index');
		try {
			$url = 'http://www.facebook.com/';

  // Create a new SEOstats instance.
			$seostats = new \SEOstats\SEOstats;

  // Bind the URL to the current SEOstats instance.
			if ($seostats->setUrl($url)) {

				echo SEOstats\Alexa::getGlobalRank();
				echo SEOstats\Google::getPageRank();

				return View::make('seostats.index')
				->with('alexa_global_rank', SEOstats\Alexa::getGlobalRank())
				->with('google_page_rank', SEOstats\Google::getPageRank());
			}
		}
		catch (SEOstatsException $e) {
			die($e->getMessage());
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('seostats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('seostats.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('seostats.edit');
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

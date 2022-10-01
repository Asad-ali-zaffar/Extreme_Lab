<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Http\Requests\Admin\CountryRequest;
use Str;
class CountriesController extends Controller
{
    
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ajax(Request $request)
    {
		if(isset($request->country_id)){
			$provinces=Provinces::where('country_id', $request->country_id)->get();
			$htmlProvinces = '';
			$htmlCities = '';
			
			foreach($provinces as $single){
				$htmlProvinces .= '<option value="'.$single->id.'">'.$single->name.'</option>'; 
			}
			
			if(isset($provinces[0]->id)){
				$cities=Cities::where('province_id', $provinces[0]->id)->get();
				foreach($cities as $single){
					$htmlCities .= '<option value="'.$single->id.'">'.$single->name.'</option>';
				}	
			}
			
			$data['province_html'] = $htmlProvinces;
			$data['city_html']    = $htmlCities;
		}
		else if(isset($request->province_id)){
			
			$htmlCities = '';
			$cities=Cities::where('province_id', $request->province_id)->get();
			foreach($cities as $single){
				$htmlCities .= '<option value="'.$single->id.'">'.$single->name.'</option>';
			}
			$data['city_html']    = $htmlCities;
		}
			
			
		echo json_encode($data);
        exit;
	}
}

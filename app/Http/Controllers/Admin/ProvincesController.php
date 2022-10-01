<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinces;
use App\Http\Requests\Admin\CountryRequest;
use Str;
class ProvincesController extends Controller
{
    
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_details($id)
    {
        $country=Provinces::findOrFail($id);
		echo "<pre>";
		print_r($country);
		exit;
	}
}

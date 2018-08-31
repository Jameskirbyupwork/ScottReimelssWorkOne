<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    /**
     * Home page
     */
    public function homePage()
    {
        return view('frontend/index');
    }


    /**
     * Out Team
     */
    public function ourTeam()
    {
        return view('frontend/ourteam');
    }

     /**
     * Annual Reports
     */
    public function annualReports()
    {
        return view('frontend/annualreports');
    }

     /**
     * Out Board
     */
    public function ourBoard()
    {
        return view('frontend/ourboard');
    }    

	 /**
	 * Out Story
	 */
    public function ourStory()
    {
        return view('frontend/ourstory');
    }
}

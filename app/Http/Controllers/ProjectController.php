<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // get the alpha training and recognitions details page
    public function atrDetails()
    {

        return view('pages.projectDetails.atr');
    }

    // get the unique college of technology details page
    public function uctDetails()
    {

        return view('pages.projectDetails.uct');
    }

    // get the itec details page
    public function itecDetails()
    {

        return view('pages.projectDetails.itec');
    }

    // get the bright college details page
    public function brightCollegeDetails()
    {

        return view('pages.projectDetails.brightCollege');
    }
    // get the zaker dairy details page
    public function zakerDairyDetails()
    {

        return view('pages.projectDetails.zakerDairy');
    }
    // get the noble training academy details page
    public function ntaDetails()
    {

        return view('pages.projectDetails.nta');
    }
    // get the crush station details page
    public function crushStationDetails()
    {

        return view('pages.projectDetails.crushStation');
    }
    // get the cleanovative details page
    public function cleanovativeDetails()
    {

        return view('pages.projectDetails.cleanovative');
    }
}

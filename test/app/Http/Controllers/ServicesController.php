<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index(){
        $services = Service::paginate(2);
        $pics = ServiceImage::all();
        return view('services.index', ['services'=>$services, 'picks'=>$pics]);
    }
    public function show($id){
        $service = Service::find($id);
        if (!$service) abort('404');
        $images = $service->images;

        return view('services.show', ['service'=>$service, 'images'=>$images]);
    }

}

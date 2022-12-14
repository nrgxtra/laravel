<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('admin.packages.index', ['packages'=>$packages]);
    }

    public function create(){
        $services = Service::all();
        return view('admin.packages.create', ['services'=>$services]);
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|string',
            'discount' => 'required|integer',
        ]);

        $services = $request->services;

        $price = 0.00;
        foreach($services as $service)
        {
            $serv=Service::find($service);
            $price += $serv->original_price;
        }
        $discount = $request['discount'];
        $total = $this->calculate($price, $discount);
        $data['total'] = $total;
        if ($request->hasFile('image')){
            $data['picture'] = $request->file('image')->store('packages', 'public');
        }
        $data['services'] = $services;
        Package::create($data);
        return redirect('/admin/package')->with('success', 'Package Created');

    }


    private function calculate(float $price, mixed $discount)
    {
        $total = $price - ($price*$discount/100);
        return $total;
    }

    public function edit($id){
        $package = Package::find($id);
        $allServices = Service::all();

        return view('admin.packages.edit', ['package'=>$package, 'allServices'=>$allServices]);
    }

    public function update(Request $request, $id){
        $package = Package::find($id);
        $data = $request->validate([
            'name' => 'required|string',
            'discount' => 'required|integer',
        ]);
        if ($request->services){
            $services = $request->services;
        }else{
            $services = $package->services;
        }


        $price = 0.00;
        foreach($services as $serviceId)
        {
            $serv=Service::find($serviceId);
            $price += $serv->original_price;
        }
        $discount = $request['discount'];
        $total = $this->calculate($price, $discount);
        $data['total'] = $total;
        if ($request->hasFile('image')){
            $data['picture'] = $request->file('image')->store('packages', 'public');
        }
        $data['services'] = $services;
        $package->update($data);
        return redirect('/admin/package')->with('success', 'Package Updated');
    }

    public function destroy(Package $package){
        $package->delete();
        return back()->with('success', 'Package Deleted');
    }

}

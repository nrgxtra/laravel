<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', ['services' => $services]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.services.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'original_price' => 'required',
        ]);
        $data['category_id'] = $request->get('category_id');
        if ($request['description']) {
            $data['description'] = $request['description'];
        }
        if ($request['discount_price']) {
            $data['discount_price'] = $request['discount_price'];
        }
        if ($request['duration']) {
            $data['duration'] = $request['duration'];
        }
        $service = Service::create($data);


        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $data['name'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('service_images'), $imageName);
                ServiceImage::create([
                    'service_id' => $service->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect('/admin/service')->with('success', 'You added new Service');
    }

    public
    function edit(Service $service)
    {
        $categories = Category::all();
        return view('admin.services.edit', ['service' => $service, 'categories' => $categories]);
    }

    public
    function save(Request $request, $id)
    {
        $service = Service::find($id);

        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'original_price' => 'required',
        ]);
        $data['category_id'] = $request->get('category_id');
        if ($request['description']) {
            $data['description'] = $request['description'];
        }
        if ($request['discount_price']) {
            $data['discount_price'] = $request['discount_price'];
        }
        if ($request['duration']) {
            $data['duration'] = $request['duration'];
        }
        $service->update($data);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $data['name'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('service_images'), $imageName);
                ServiceImage::create([
                    'service_id' => $service->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect('/admin/service')->with('success', 'Service Updated');

    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin/service')->with('success', 'Service Deleted');
    }

    public function del($id){
        $image = ServiceImage::find($id);
        $image->delete();
        return back()->with('success', 'deleted');
    }

}

<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email:filter'],
            'phone' => ['required', 'string'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'message' => ['required', 'string'],
            'service' => ['required', 'string'],
        ]);
        if ($validation->fails()) {
            return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
        }

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;
        $time = $request->time;
        $message = $request->message;
        $service = $request->service;

        Booking::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'date' => $date,
                'time' => $time,
                'message' => $message,
                'service' => $service,]
        );
        $msg = "
        Name: $name
        Email: $email
        Phone: $phone
        Date: $date
        Time: $time
        Message: $message
        Service: $service
        ";
        $receiver = 'sisi.eyebrows@gmail.com';
        Mail::to($receiver)->queue(new BookingMail($msg));
        return response()->json(['code' => 200, 'msg' => 'Thank You for booking our service']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

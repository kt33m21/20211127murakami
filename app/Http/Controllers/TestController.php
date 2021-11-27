<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\RegisterRequest;

class TestController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
        $first_name=$request-old('first_name');
        $last_name=$request-old('last_name');
        $email=$request-old('email');
        $postcode=$request-old('$postcode');
        $address=$request-old('$address');
        $building_name=$request-old('$building_name');
        $opinion=$request-old('opinion');
    }

    public function post(RegisterRequest $request)
    {
        $first_name =$request->input('first_name');
        $last_name =$request->input('last_name');
        $gender =$request->input('gender');
        $email =$request->input('email');
        $postcode =$request->input('postcode');
        $address =$request->input('address');
        $building_name =$request->input('building_name');
        $opinion =$request->input('opinion');
        return view('verification',compact('first_name','last_name','gender','email','address','postcode','building_name','opinion'));
    }

    public function search(Request $request)
    {
        $item = Contact::where('fullname','gender','email','address','postcode','building_name','opinion','LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
    }

    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        return redirect('/completion');
    }

    public function completion()
    {
        return view('completion');
    }


    public function management()
    {
        $items = Contact::all();
        return view('management', ['items' => $items]);
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        return view('management', ['form' => $contact]);
    }
    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/management');
    }


}

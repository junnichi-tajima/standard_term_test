<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
        
        // $request->session()->put([
        //     '_old_input' => [
        //         'name' => '',
        //         'sex' => '',
        //         'email' => '',
        //     ]
        // ]);
        return View('index');
    }
    public function test(Request $request)
    {
        $item = [
            'name' => $request->name,
            'sex' => $request->sex,
            'mail' => $request->mail,
        ];
        $request->session()->put("form_input", $request->all());

        $request->session()->put([
            '_old_input' => [
                'name' => $request->name,
                'sex' => $request->sex,
                'email' => $request->mail,
            ]
        ]);
        return View("test",$item);
    }

    public function store(Request $req)
    {
        $param= $req->session()->get('form_input');
        $item = Contact::create($param);
        return $item;
    }

    public function confirm(Request $req)
    {
        $fullname = $req->Fam_name . " " . $req->first_name;
        $param  = [
            'fullname' => $fullname,
            'gender' => $req->gender,
            'email'   => $req->email,
            'postcode' => $req->postcode,
            'address' => $req->address,
            'building_name' => $req->building_name,
            'opinion' => $req->opinion
        ];
        
        $validate_rule = [
            'Fam_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'reqquired',
            'address' => 'required',
            'opinion' => 'required'
        ];
        $this->validate($request, $validate_rule);
        $req->session()->put("form_input", $param);
        return View('confirm',$param);
    }
}

<?php

namespace App\Http\Controllers;

use Validator;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

        /**
         * Store a newly created resource in create.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
    public function create()
    {
        //
        $validator = Validator::make(request()->all(), [
            'phone' => 'max:15',
        ]);
        if ($validator->fails()) {
            return array(
              'code'      => 201,
              'message'   => 'Phone max length 15 character',
            );
        }

        //
        $validator = Validator::make(request()->all(), [
            'first_name' => 'required',
        ]);
        if ($validator->fails()) {
            return array(
              'code'      => 201,
              'message'   => 'First Name required value',
            );
        }

        //
        $validator = Validator::make(request()->all(), [
            'email' => 'email',
        ]);
        if ($validator->fails()) {
            return array(
              'code'      => 201,
              'message'   => 'Format email is wrong',
              'email'     => request()->email,
            );
        }

        $response        = array();
        $parameter       = array();
        $parameter       = request()->all();
        $parameter['id'] = (int)Users::all()->last()->id + 1;
        Users::create($parameter);
        // return $parameter;

        return array(
          'code'     => 200,
          'response' => $parameter,
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($parameter = null)
    {
        //
        $response = array();
        $data = Users::where('id', $parameter)
        ->orWhere('first_name', $parameter)
        ->orWhere('last_name', $parameter)
        ->get();

        if (count($data)  > 0) {
          $response['code']     = 200;
          $response['response'] = $data;
        }else{
          $response['code']     = 201;
          $response['response'] = array();
        }

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

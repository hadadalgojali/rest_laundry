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
            'phone'      => 'max:15',
            'first_name' => 'required',
            'email'      => 'email',
            'birthday'   => 'date',
        ]);
        if ($validator->fails()) {
            return array(
              'code'      => 201,
              'message'   => $validator->messages(),
            );
        }

        $response  = array();
        try{
          $parameter       = array();
          $parameter       = request()->all();
          $parameter['id'] = (int)Users::all()->last()->id + 1;
          $result    = Users::create($parameter);
          if ($result){
              $response['code']     = 200;
              $response['message']  = "Successfully Saving!";
              $response['response'] = $parameter;
          }else{
              $response['code']     = 201;
              $response['message']  = "Was not Saving, Try Again!";
              $response['response'] = $parameter;
          }
        }catch(\Exception $exception){
          dd($exception);
          $response['code']    = 201;
          $response['message'] = 'No Customer to de!' . $exception->getCode();
        }
        return json_encode($response, JSON_PRETTY_PRINT);
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
      $response  = array();
        //
        // $validator = Validator::make(request()->all(), [
        $validator = Validator::make($request->input(), [
            'phone'      => 'max:15',
            'first_name' => 'required',
            'email'      => 'email',
            'birthday'   => 'date',
        ]);

        if ($validator->fails()) {
            return array(
              'code'      => 201,
              'message'   => $validator->messages(),
            );
        }
        try{
          $parameter = Users::find($id);
          if ($parameter){
            $parameter->first_name = $request->input('first_name');
            $parameter->last_name  = $request->input('last_name');
            $parameter->birthday   = $request->input('birthday');
            $parameter->address    = $request->input('address');
            $parameter->phone      = $request->input('phone');
            $parameter->email      = $request->input('email');
            $result    = $parameter->update();
          }else{
            $result = false;
          }

          if ($result){
              $response['code']     = 200;
              $response['message']  = "Successfully Updated!";
              $response['response'] = $parameter;
          }else{
              $response['code']     = 201;
              $response['message']  = "Was not Updated, Try Again!";
              $response['response'] = $parameter;
          }
        }catch(\Exception $exception){
          dd($exception);
          $response['code']    = 201;
          $response['message'] = 'Data Not Found!' . $exception->getCode();
        }
        return json_encode($response, JSON_PRETTY_PRINT);
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
        $response  = array();
        try{
          $parameter = Users::find($id);
          if ($parameter){
            $result    = $parameter->delete();
          }else{
            $result = false;
          }

          if ($result){
              $response['code']     = 200;
              $response['message']  = "Successfully Deleted!";
              $response['response'] = $parameter;
          }else{
              $response['code']     = 201;
              $response['message']  = "Was not Deleted, Try Again!";
              $response['response'] = $parameter;
          }
        }catch(\Exception $exception){
          dd($exception);
          $response['code']    = 201;
          $response['message'] = 'No Customer to de!' . $exception->getCode();
        }
        return json_encode($response, JSON_PRETTY_PRINT);
    }
}

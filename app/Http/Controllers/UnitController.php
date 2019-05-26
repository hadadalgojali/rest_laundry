<?php

namespace App\Http\Controllers;

use App\Unit;
use Validator;
use Illuminate\Http\Request;

class UnitController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
            $response  = array();
            $validator = Validator::make(request()->all(), [
                'description'     => 'required|max:25',
            ]);

            if ($validator->fails()) {
                return response()->json(array(
                  'code'      => 401,
                  'message'   => $validator->messages(),
                ), 401);
                die;
            }

            try{
              $parameter           = array();
              $parameter           = request()->all();
              $parameter['id']     = (int)Unit::all()->last()->id + 1;
              $response['code']    = 401;
              $response['message'] = "Was not Saving, Try Again!";
              $result              = Unit::create($parameter);

              if ($result){
                  $response['code']     = 200;
                  $response['message']  = "Successfully Saving!";
                  $response['response'] = $parameter;
              }
            }catch(\Exception $exception){
              dd($exception);
              $response['code']    = 401;
              $response['message'] = 'Error Proced!' . $exception->getCode();
            }
            return response()->json($response, $response['code']);
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

    public function show($parameter = null){
        $response = array();
        if (is_numeric($parameter)) {
          $data = Unit::where('id', $parameter)
          ->get();
        }else{
          $data = Unit::where('description', 'LIKE', "%{$parameter}%")
          ->get();
        }

        if (count($data)  > 0) {
          $response['code']     = 200;
          $response['response'] = $data;
        }else{
          $response['code']     = 401;
          $response['response'] = array();
        }
        return response()->json($response, $response['code']);
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
    public function update(Request $request, $id){
      $response  = array();
        //
        $validator = Validator::make($request->input(), [
            'description'     => 'required|max:25',
        ]);

        if ($validator->fails()) {
            return response()->json(array(
              'code'      => 401,
              'message'   => $validator->messages(),
            ), 401);
        }


        try{
          $parameter = Unit::find($id);
          if ($parameter){
            $parameter->description = $request->input('description');
            $result                 = $parameter->update();
          }else{
            $result = false;
          }

          if ($result){
              $response['code']     = 200;
              $response['message']  = "Successfully Updated!";
              $response['response'] = $parameter;
          }else{
              $response['code']     = 401;
              $response['message']  = "Was not Updated, Try Again!";
              $response['response'] = $parameter;
          }
        }catch(\Exception $exception){
          dd($exception);
          $response['code']    = 401;
          $response['message'] = 'Data Not Found!' . $exception->getCode();
        }
        return response()->json($response, $response['code']);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
        $response  = array();
        try{
          $parameter = Unit::find($id);
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
              $response['code']     = 401;
              $response['message']  = "Was not Deleted, Try Again!";
              $response['response'] = $parameter;
          }
        }catch(\Exception $exception){
          dd($exception);
          $response['code']    = 401;
          $response['message'] = 'No Customer to de!' . $exception->getCode();
        }
        return response()->json($response, $response['code']);
    }
}

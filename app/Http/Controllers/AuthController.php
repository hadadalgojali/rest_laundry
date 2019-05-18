<?php

namespace App\Http\Controllers;

use Validator;
use App\Users_account;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
      $response = array();
      $validator = Validator::make($request->input(), [
          'username' => 'required',
          'password' => 'required',
      ]);

      if ($validator->fails()) {
          return array(
            'code'      => 201,
            'message'   => $validator->messages(),
          );
      }

      $data = Users_account::where('username', $request->input('username'))
      ->where('password', md5($request->input('password')))->get();
      if (count($data)  > 0) {
        // $data->loggin_status = 1;
        // $data->loggin_time   = date('Y-m-d H:i:s');
        $data = Users_account::where('username', $request->input('username'))
        ->where('password', md5($request->input('password')))->update([
          'loggin_status' => 1,
          'loggin_time' => date('Y-m-d H:i:s'),
        ]);
        $response['code']    = 200;
      }else{
        $response['code']     = 201;
      }
      return $response;
    }
    //

    public function logout($id = null){
      $response = array();
      $data = Users_account::find($id);
      if ($data) {
        // $data->loggin_status = 1;
        // $data->loggin_time   = date('Y-m-d H:i:s');
        $data = Users_account::where('id', $id)->update([
          'loggin_status' => 0,
          'logout_time'   => date('Y-m-d H:i:s'),
        ]);
        $response['code']    = 200;
      }else{
        $response['code']     = 201;
      }
      return $response;
    }
}

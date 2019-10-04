<?php

namespace App\Http\Middleware;

use Closure;
use App\Api_token;
use Illuminate\Support\Facades\Auth;
class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      // if (strlen($request->header('APP_KEY')) > 5) {
      if (strlen($request->header()['api-key'][0]) > 5) {
        return response()->json(['code' => 401, 'message' => 'APP KEY Failed formatted !', ], 401);
      }
      // $result = Api_token::where('secret_key',$request->header('APP_KEY'))
      $result = Api_token::where('secret_key',$request->header()['api-key'][0])
      // ->where('api_token', md5($request->header('API_TOKEN')))
      ->where('api_token', md5($request->header()['app-token'][0]))
      ->count();

      if($result>0){
        return $next($request);
      }else{
        return response()->json(['message' => 'Invalid Authenticate !', 'code' => 401], 401);
      }
    }
}

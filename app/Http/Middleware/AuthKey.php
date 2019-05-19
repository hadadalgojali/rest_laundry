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
      $result = Api_token::where('secret_key',$request->header('APP_KEY'))
      ->where('api_token', md5($request->header('API_TOKEN')))
      ->count();

      if($result>0){
        return $next($request);
      }else{
        return response()->json(['message' => 'Invalid Authenticate !', 'code' => 401], 401);
      }
    }
}

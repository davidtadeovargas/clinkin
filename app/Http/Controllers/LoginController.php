<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function checklogin(Request $request){
    	
    	$User = $request->session()->get('user');

    	$view = "product";
    	if(!$User){
    		$view = "login";
    	}
        else{
            //Refresh the actual model
            $User = User::where('email', $User->email)->first();
            if(!$User){
                $response = ['res' => 'invalid_user'];
                return response()->json($response);
            }
        }

        return \View::make($view)->with('User',$User);
    }

    public function login(Request $request){
        
        $email = $request->input('email');
        $password = $request->input('password');
        $code = $request->input('code');
        
        $client = new Client;
        $requestGuzzle = $client->post('https://clinkin.apinterfaces.ml/modules/masters/core/loginUser.php', array('json' => array('userID' => $email, 'password' => $password)));
        $response = json_decode($requestGuzzle->getBody()->getContents());

        /*$User = User::where('email', $email)->where('password', $password)->first();
        if($User){
            $res = 'ok';

            $request->session()->put('user', $User);
        }
        else{
            $res = 'invalid';
        }*/

        if($response->error==0){
            $res = 'ok';

            $User = new User();

            $request->session()->put('user', $User);

            if($code=="654321"){
                $request->session()->put('license', "P");
            } else{
                $request->session()->put('license', "B");
            }

            $request->session()->put('name', "David Vargas");
            $request->session()->put('code', $code);
            $request->session()->put('email', $email);
        }
        else{
            $res = $response->error;
        }

        $response = ['res' => $res, 'code' => $response];
        
        return response()->json($response);
    }

    public function closeLogin(Request $request){
        
        $request->session()->invalidate();
        
        $response = ['res' => 'ok'];

        return response()->json($response);
    }

    public function loginView(Request $request){
        return view("login");
    }
}

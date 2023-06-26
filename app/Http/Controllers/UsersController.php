<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    /**
     * @OA\Post(
     * tags={"Authentication"},
     * summary="Get a autentication user token",
     * description="This endpoints return a  all Books Registed",
     *     path="/api/v1/login",
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */


     public function login(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
    
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }


    public function sendError($error, $errorMessages = [], $code = 404)
    {
     $response = [
            'success' => false,
            'message' => $error,
        ];if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }return response()->json($response, $code);
    }

    public function sendResponse($result, $message)
    {
     $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];return response()->json($response, 200);
    }

}

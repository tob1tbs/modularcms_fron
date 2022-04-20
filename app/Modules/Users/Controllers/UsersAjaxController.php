<?php

namespace App\Modules\Users\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Users\Models\User;

use Validator;
use Auth;
use Response;

class UsersAjaxController extends Controller
{

    public function __construct() {
        //
    }

    public function ajaxUsersLogin(Request $Request) {
        if($Request->isMethod('POST')) {
            
            $messages = array(
                'required' => 'ელ-ფოსტა ან პაროლი არასწორია',
            );
            $validator = Validator::make($Request->all(), [
                'user_email' => 'required|max:255',
                'user_password' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return Response::json(['status' => true, 'errors' => true, 'message' => $validator->getMessageBag()->toArray()], 200);
            } else {
                if(Auth::attempt(['email' => $Request->user_email, 'password' => $Request->user_password, 'deleted_at_int' => 1, 'active' => 1], true)) {
                   return Response::json(['status' => true, 'redirect_url' => route('actionMainIndex')]);
                } else {
                    return Response::json(['status' => true, 'errors' => true, 'message' => [0 => 'ელ-ფოსტა ან პაროლია არასწორია !!!']]);
                }
            }
        } else {
            return Response::json(['status' => false, 'message' => 'დაფიქსირდა შეცდომა, გთხოვთ სცადოთ თავიდან !!!']);
        }
    }
}

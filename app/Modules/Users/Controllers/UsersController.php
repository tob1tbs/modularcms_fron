<?php

namespace App\Modules\Users\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Users\Models\User;

use Auth;

class UsersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionUsersLogin() {
        if(Auth::check()) {
            return redirect()->route('actionUsersView');
        } else {
            if (view()->exists('users.users_login')) {

                $data = [
                    'seo' => $this->seoList('main'),
                ];

                return view('users.users_login', $data);
            } else {
                abort('404');
            }
        }
    }

    public function actionUsersView() {
        if (view()->exists('users.users_view')) {

            $data = [
                'seo' => $this->seoList('main'),
            ];

            return view('users.users_view', $data);
        } else {
            abort('404');
        }
    }

    public function actionUsersRegistration () {
        if (view()->exists('users.users_registration')) {

            $data = [
                'seo' => $this->seoList('registration'),
            ];

            return view('users.users_registration', $data);
        } else {
            abort('404');
        }
    }
}

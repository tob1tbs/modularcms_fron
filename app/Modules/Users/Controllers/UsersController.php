<?php

namespace App\Modules\Users\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modules\Users\Models\User;

class UsersController extends Controller
{

    public function __construct() {
        //
    }

    public function actionUsersLogin() {
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

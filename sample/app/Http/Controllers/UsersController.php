<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Reports;
use App\Users;

class UsersController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /*
     * 記事の表示
     *
     * @return Response
     *
     */

    public function index()
    {
        $users = Users::orderBy('created_at','asc')->paginate(20);

        return view('page.userslist', compact('users'));
    }

    /*
     * 記事の表示
     *
     * @return Response
     *
     */

    public function show($user_id)
    {
        $user = Users::where('id', $user_id)
                            ->get();

        return view('page.useredit', compact('user'));
    }

    /*
     * 記事の作成
     *
     * @return Response
     *
     */

    public function update()
    {

        // return view('page.reportcreate');
    }


}

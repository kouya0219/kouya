<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Reports;

class CommentsController extends Controller
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

    public function store()
    {

    }

    /*
     * コメントの作成
     *
     * @return Response
     *
     */

    public function create()
    {

        return view('page.comments');
    }


}

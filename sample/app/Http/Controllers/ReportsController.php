<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Reports;

class ReportsController extends Controller
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
        $reports = Reports::paginate(20);
        return view('welcome', compact('reports'));
    }

    /*
     * 記事の表示
     *
     * @return Response
     *
     */

    public function show($report_id)
    {
        $report = Reports::where('id', $report_id)
                            ->get();

        $report = $report[0];
        return view('page.report', compact('report'));
    }

    /*
     * 記事の作成
     *
     * @return Response
     *
     */

    public function create()
    {

        return view('page.reportcreate');
    }

    public function store(Request $request)
    {


        $dateTime = Carbon::now('Asia/Tokyo');//->toDateTimeString();
        //DB格納data
        $requestData = [
            "user_id" => Auth::user()->id,
            "title" => $request->title,
            "contents" => $request->contents,
            "created_by" => $user->id,
            "created_at" => $dateTime,
            "updated_at" => $dateTime,
        ];
        return view('page.reportcreate');
    }

}

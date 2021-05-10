<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstructionalResource;

class AllFiles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $IRs = InstructionalResource::orderByDesc('created_at')
            ->take(10)
            ->get();

        if ($request->view === 'list') {
            return view('pages.all-files')
                ->with('instructionals', $IRs)
                ->with('rowCount', InstructionalResource::all()->count())
                ->with('title', 'all files')
                ->with('view', 'list');
        }
        return view('pages.all-files')
            ->with('instructionals', $IRs)
            ->with('rowCount', InstructionalResource::all()->count())
            ->with('title', 'all files')
            ->with('view', 'grid');
    }

    // public function listView()
    // {
    //     $IRs = InstructionalResource::orderByDesc('created_at')
    //     ->take(10)
    //     ->get();

    // return view('pages.all-files')
    //     ->with('instructionals', $IRs)
    //     ->with('rowCount', InstructionalResource::all()->count())
    //     ->with('title', 'all files');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /* Custom Methods */
    public function loadMoreFiles(Request $request)
    {

        $IRs = InstructionalResource::orderByDesc('created_at')
            ->take($request->amount)
            ->get();

        $output = '';
        foreach ($IRs as $IR) {
            $output .=  '
                <div class="col mb-3">
                    <div class="files__card card border" filetype="doc">
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="text-dark d-block">' . $IR->name . '</span>
                                <small class="text-muted">10.45kb</small>
                            </div>
                            <small class="text-muted">Last accessed 3 mins ago</small>
                            <div class="options-wrapper">
                                <a href="#we" class="preview-btn btn">
                                </a>
                                <div class="more-options">
                                    <a href="#qwe" class="download-btn btn btn-muted">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    <a href="#qwe2" class="important-btn btn btn-muted">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
        }
        $amount = $request->amount > $IRs->count() ? $IRs->count() : $request->amount;
        if ($request->amount <= $IRs->count()) {
            $output .= <<<EOT
                    <div class="col mb-3">
                    <div class="files__card files__card-more card border shadow" filetype='load-more'>
                        <div class="card-body p-2">
                            <div class="card-img"></div>
                            <div class="card-text my-2">
                                <span class="text-primary d-block text-center">Click to load more</span>
                                <small class="file-count text-muted text-center d-block">(10 out of<span class="ml-1>{$amount})</span></small>
                            </div>
                            <small class="text-muted"></small>
                            <div class="options-wrapper-active">
                                <a href="#" class="load-more preview-btn btn">
                                    <form action="{$request->_route}" method="post">
                                    <input type="hidden" name="_token" value="{$request->session()->token()}">
                                        <button type="submit" class="invisible"></button>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        EOT;
        }
        return [
            "html" => $output,
            'rowCount' => $IRs->count(),
            'amount' => $amount
        ];
    }
}

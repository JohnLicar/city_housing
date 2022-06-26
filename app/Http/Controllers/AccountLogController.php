<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountLogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->authorize('access_logs');
        return view('logs.index');
    }
}

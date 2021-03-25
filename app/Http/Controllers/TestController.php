<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewRequests(Request $request)
    {
        return ApiRequest::all();
    }

    public function storeRequest(Request $request) {
        $api_request = new ApiRequest;
        $api_request->ip_address = $request->ip();
        $api_request->request_method = $request->method();
        $api_request->parameters = $request->all();
        $api_request->save();

    }
}

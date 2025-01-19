<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Auth;
use App\Models\User;
use App\Models\ApiResponse;

class ApiController extends Controller
{
    use ApiResponse;
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://petstore.swagger.io/v2/',
            'timeout'  => 10.0,
        ]);
    }
}

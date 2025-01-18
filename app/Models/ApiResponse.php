<?php

namespace App\Models;


trait ApiResponse{

    protected function successResponse($data = null, $code = 200){
        return response()->json($data, $code);
    }

    protected function errorResponse($message = 'Error', $code = 404){
        return response()->json(['status' => 'error', 'message' => $message], $code);
    }
}
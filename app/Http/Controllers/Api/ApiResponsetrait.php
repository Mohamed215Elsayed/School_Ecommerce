<?php
namespace App\Http\Controllers\Api;
// use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Validator; //
use Illuminate\Http\Request\StudentController;//
use App\Http\Controllers\Api\Request;//

trait ApiResponsetrait{
    public function apiResponse($data=null, $message=null, $status=null){
        $array=[
            'data'=>$data,
            'message'=>$message,
            'status'=>$status,
        ];
            return response($array,200);
        }

    }

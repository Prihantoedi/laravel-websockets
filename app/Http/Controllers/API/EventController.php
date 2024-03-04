<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index(){
        $text = 'this is from api event controller';
        try{
            broadcast(new \App\Events\HelloEvent($text));
            return response()->json([
                'status' => 200,
                'msg' => 'event triggered successfully'
            ], 200);
        } catch(\Exception $e){

            dd($e);
            return response()->json([
                'status' => 400,
                'msg' => 'problematic event'
            ], 400);
        }
        


    }
}

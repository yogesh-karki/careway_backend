<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private function encodeArray($arr,$toBeEncoded){
        foreach($toBeEncoded as $key){
            $arr[$key] = json_encode($arr[$key]);
        }
        return $arr;
    }

    public function addUpdateFaqs(Request $request){
        $nonImageData = json_decode($request->nonImageData,true);
        $toBeEncoded = ['faq'];
        $finalData = $this->encodeArray($nonImageData,$toBeEncoded );
        if(isset($finalData['id'])){
            $faq = Faq::find($finalData['id']);
            Faq::find($finalData['id'])->update($finalData);
        }
        else $faq = Faq::create($finalData);
        Session::flash('success','Succesfully Added Faq');
        return response(['msg'=>"Successfully Added"],200);
    }
}

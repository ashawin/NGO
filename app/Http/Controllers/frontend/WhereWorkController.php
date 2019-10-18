<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WhereWorkController extends Controller
{
   public function index()
   {

       $dom = new \DOMDocument("1.0");


       $dom->formatOutput = true;
       $xml_file_name =public_path('xmlTemplate.xml');
       $node = $dom->createElement("markers");
       $parnode = $dom->appendChild($node);
       header("Content-type: text/xml");


   $initial = DB::table('settings')->where('id', '=', 1)->first();
       $wherework=DB::table('page_where_we_work')->get();
       $maplocation=DB::table('map_work_location')->get();
       foreach($maplocation as $location) {
           $node = $dom->createElement("marker");
           $newnode = $parnode->appendChild($node);
           $newnode->setAttribute("id",$location->id);
           $newnode->setAttribute("name",$location->title);
           $newnode->setAttribute("address",$location->address);
           $newnode->setAttribute("lat", $location->lat);
           $newnode->setAttribute("lng",$location->lng);

       }
       $dom->save($xml_file_name);
       return view('themes.frontend.where_we_work',['wherewework'=>$wherework,'initial'=>$initial]);
   }


}

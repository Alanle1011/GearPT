<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducerController extends Controller
{
    public function index(){
        $data = Producer::get();
        

        return view('list-producer', compact('data'));
    }
    public function addProducer(){
       
        return view('add-producer');
    }
    public function saveProducer(Request $request)
    {

        $request->validate([
          
            'producerName' => 'required',
            'producerImage' => 'required'
        ]);
      
   
        $producerName = $request->producerName;
        $producerImage = $request->producerImage;
        

        $Producer = new Producer();
       
        $Producer->producerName = $producerName;
        $Producer->producerImage = $producerImage;
        $Producer->save();
        

        return redirect()->back()->with('success','Producer Added Successfully');
    }
    public function editProducer($id){
        $data = Producer::where('producerID','=',$id)->first();
        return view('edit-producer',compact('data'));
    }
    public function updateProducer(Request $request){
        $id = $request->producerID;

        Producer::where('producerID','=',$id)->update([
            'producerID' => $request->producerID,
            'producerName' => $request->producerName,
            'ProducerImage' => $request->ProducerImage
        ]);

        return redirect()->back()->with('success','Producer Edited Successfully');
    }
    public function deleteProducer($id){
        Producer::where('producerID','=',$id)->delete();
        return redirect()->back()->with('success','Producer Deleted Successfully');
    }
}

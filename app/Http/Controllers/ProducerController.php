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
        $producerID = Producer::get();
        return view('add-producer', compact('producerID'));
    }
    public function saveProducer(Request $request)
    {

        $request->validate([
            'producerID' => 'required',
            'producerName' => 'required',
            'ProducerImage' => 'required'
        ]);
      
        $producerID = $request->producerID;
        $producerName = $request->producerName;
        $ProducerImage = $request->ProducerImage;
        

        $Producer = new Producer();
        $Producer->producerID = $producerID;
        $Producer->producerName = $producerName;
        $Producer->ProducerImage = $ProducerImage;
        $Producer->save();
        

        return redirect()->back()->with('success','Producer Added Successfully');
    }
    public function editProducer($id){
        $data = Producer::where('producerID','=',$id)->first();
        return view('edit-producer',compact('data'));
    }
    public function updateProducer(Request $request){
        $id = $request->ProducerID;

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

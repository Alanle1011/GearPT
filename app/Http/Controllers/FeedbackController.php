<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index(){
        $data = Feedback::get();
        

        return view('list-feedback', compact('data'));
    }
    public function addFeedback(){
        $clientData = Client::get();
        $productData = Product::get();
        $feedbackData = Feedback::get();
        return view('add-feedback', compact('clientData','productData','feedbackData'));
    }
    public function saveFeedback(Request $request)
    {

        $request->validate([
            'clientID' => 'required',
            'productID' => 'required',
            'ranking' => 'required'
        ]);
      
        $clientID = $request->clientID;
        $productID = $request->productID;
        $ranking = $request->ranking;
        

        $feedback = new Feedback();
        $feedback->clientID = $clientID;
        $feedback->productID = $productID;
        $feedback->ranking = $ranking;
        $feedback->save();
        

        return redirect()->back()->with('success','Feedback Added Successfully');
    }
    public function editFeedback($id){
        $data = Feedback::where('clientID','=',$id)->first();
        return view('edit-feedback',compact('data'));
    }
    public function updateFeedback(Request $request){
        $id = $request->clientID;

        Feedback::where('clientID','=',$id)->update([
            'clientID' => $request->clientID,
            'productID' => $request->productID,
            'ranking' => $request->ranking
        ]);
        return redirect()->back()->with('success','Feedback Edited Successfully');
    }
    public function deleteFeedback($id){
        Feedback::where('clientID','=',$id)->delete();
        return redirect()->back()->with('success','Feedback Deleted Successfully');
    }
}

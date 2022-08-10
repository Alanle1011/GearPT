<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Client;
use App\Models\Product;

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
        $comment = $request->comment;
        $ranking = $request->ranking;
        

        $feedback = new Feedback();
        $feedback->clientID = $clientID;
        $feedback->productID = $productID;
        $feedback->ranking = $ranking;
        $feedback->comment =$comment;
        $feedback->save();
        

        return redirect()->back()->with('success','Feedback Added Successfully');
    }
    public function editFeedback($id){
        $data = Feedback::where('feedbackID','=',$id)->first();
        return view('edit-feedback',compact('data'));
    }
    public function updateFeedback(Request $request){
        $id = $request->feedbackID;

        Feedback::where('feedbackID','=',$id)->update([
            'clientID' => $request->clientID,
            'productID' => $request->productID,
            'ranking' => $request->ranking,
            'comment' => $request->comment
        ]);
        return redirect()->back()->with('success','Feedback Edited Successfully');
    }
    public function deleteFeedback($id){
        Feedback::where('feedbackID','=',$id)->delete();
        return redirect()->back()->with('success','Feedback Deleted Successfully');
    }
}

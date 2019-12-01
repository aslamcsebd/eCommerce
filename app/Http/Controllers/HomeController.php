<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Carbon\Carbon;
use Mail;
use App\Mail\ContactMessage;
use App\Card;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(){
      return view('layouts/contact');
    }

    public function contact_insert(Request $all_request){
      $all_request-> validate([
         'full_name'=> 'required',
         'email'=> 'required|unique:contacts,email',
         'subject'=> 'required',
         'message'=> 'required',
      ]);

     //  $contact = Contact::insert([
     //     'full_name'=>$request->full_name,
     //     'email'=>$request->email,
     //     'subject'=>$request->subject,
     //     'message'=>$request->message,
     //     'created_at' => Carbon::now('Asia/Dhaka')
     // ]);

      $contact = Contact::insert($all_request->except('_token'));
      // $full_name = $request->full_name;
      // $message = $request->message;
      Mail::to('aslamcsebd@gmail.com')->send(new ContactMessage($all_request));
      return back()->with('status', 'Your message send successfully!');
      
      // Example
      // $contact = Contact::insert($request->except('_token', 'full_name', 'last_name')); etc...
      // return view('contact')->with('status', 'Your message send successfully!');
      // return redirect('contact')->with('status', 'Your message send successfully!');
   }

   public function contact_sms_view(){
      $all_smses=Contact::paginate(6);
      return view('layouts/view_sms', compact('all_smses'));   
   }

   public function view_sms($sms_id){
      $view_sms = Contact::find($sms_id);
      if ($view_sms->read_status == 1) {
         $view_sms->read_status = 2;
      }
      $view_sms->save();

      $single_sms_view = Contact::find($sms_id);

      return view('layouts/single_sms_view', compact('single_sms_view'));
   }    

   public function delete_sms($sms_id){
      Contact::find($sms_id)->delete();
      return back()->with('delete_sms', 'Delete delete successfully');
   }

   public function card(){
      
      $card_items = Card::where('customer_ip', $_SERVER['REMOTE_ADDR'])->get();
      return view('card/card', compact('card_items') );      
   }

   public function card_delete($card_no){

      Card::find($card_no)->delete();
      return back();
   }

   public function delete_all_cart(){

      Card::where('customer_ip', $_SERVER['REMOTE_ADDR'])->delete();
      return redirect('/');
   }


}

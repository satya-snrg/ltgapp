<?php

namespace App\Http\Controllers;
use App\Message;
use App\LocalBusiness;
use App\SubscriptionPlans;
use App\Subscriptions;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\ContactForm;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('public.home');
    }

    public function login()
    {
        return view('public.login');

    }

    public function userLogin(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Get the currently authenticated user...
            $user = Auth::user();
            if($user->role == "Admin"){
                return redirect('admin-home');
            }
        }else{
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function AdminUserHome()
    {
        return view('v2.home.admin');

    }

    public function contactUs(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $record = new ContactForm();
        $record->name = $request->name;
        $record->email = $request->email;
        $record->subject = $request->subject;
        $record->message = $request->message;;
        $record->save();
        return "success";
    }


    public function contactFormSubmissions()
    {
        $records = ContactForm::orderBy('id', 'DESC')->paginate(10);
        return view('v2.contactform.index',compact('records'));
    }
}

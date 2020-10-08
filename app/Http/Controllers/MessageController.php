<?php

namespace App\Http\Controllers;

use App\Letter;
use Illuminate\Http\Request;
use App\Message;
use App\MsgForTheDaySubscription;

class MessageController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Message::orderBy('id', 'DESC')->paginate(10);
        return view('v2.messages.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('v2.messages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lang_en' => 'required',
            //'file' => 'mimes:jpeg,jpg,png|max:2048',
        ]);

        $id = $request->has('id') ? $request->id : null;
        if(!is_null($id)){
            $record = Message::find($id);
        }else{
            $record = new Message();
        }

        $fileName = '';
        if($request->has('image')){
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $fileName = time().$file->getClientOriginalName();
            $file->move($destinationPath,$fileName);
        }

        $record->lang_en = $request->lang_en;
        $record->lang_hi = $request->lang_hi;
        $record->lang_te = $request->lang_te;
        $record->image_url = $fileName;
        $record->save();


        return redirect()->route('messages.index')
            ->with('success','Message saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Message::find($id);
        return view('v2.messages.form', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        // All posted data except token and id
        $data = request()->except(['_token','id','_method']);

        // Remove empty array values from the data
        $result = array_filter($data);



        $affectedRows = Message::where("id", $id)->update($result);

        return redirect()->route('categories.index')
            ->with('success','Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postQuestion(Request $request){
        $selectedLang = $request->has('lang') ? $request->lang : 'en_in';
        $record = Message::inRandomOrder()->first();

        $msg = '';
        if($selectedLang == "en_in"){
            $msg = $record->lang_en;

        }else if($selectedLang == "hi_in"){
            $msg = $record->lang_hi;
        }else if($selectedLang == "tl_in"){
            $msg = $record->lang_te;
        }

        $log = new Letter();
        $log->name = $request->has('name') ? $request->name : '';
        $log->email = $request->has('email') ? $request->email : '';
        $log->phone = $request->has('phone') ? $request->phone : '';
        $log->question = $request->has('question') ? $request->question : '';
        $log->message = $msg;
        $log->save();
        return $msg;
    }

    public function letters(){
        $records = Letter::orderBy('id', 'DESC')->paginate(10);
        return view('v2.letters.index',compact('records'));
    }

    public function subscibedUsers(){
        $records = MsgForTheDaySubscription::orderBy('id', 'DESC')->paginate(10);
        return view('v2.message_subscribers.index',compact('records'));
    }


}

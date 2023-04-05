<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\Chat;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::all();
        return view('chat.index' , [
            'chats' => $chats,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

     // Upload CkEditor file
     public function uploadFile(Request $request){

         $data = array();

         $validator = Validator::make($request->all(), [
              'upload' => 'required|mimes:png,jpg,jpeg|max:2048'
         ]);

         if ($validator->fails()) {

              $data['uploaded'] = 0;
              $data['error']['message'] = $validator->errors()->first('upload');// Error response

         }else{
              if($request->file('upload')) {

                    $file = $request->file('upload');
                    $filename = time().'_'.$file->getClientOriginalName();

                    // File upload location
                    $location = 'uploads';

                    // Upload file
                    $file->move($location,$filename);

                    // File path
                    $filepath = url('uploads/'.$filename);

                    // Response
                    $data['fileName'] = $filename;
                    $data['uploaded'] = 1;
                    $data['url'] = $filepath;

              }else{
                    // Response
                    $data['uploaded'] = 0;
                    $data['error']['message'] = 'File not uploaded.'; 
              }
         }

         return response()->json($data);
     }

     // Submit form
     public function submitform(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required',
        ]);


        $chat = new Chat;
        $chat->name = $request->name;
        $chat->message = $request->message;
  
        $chat->save();

        Session::flash('message','Form submit Successfully.');

        return redirect()->route('chats.index');

     }


}

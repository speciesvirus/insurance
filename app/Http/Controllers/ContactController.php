<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use DB;
 use Mail;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


    /**
     * Insert contact.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function insertContact(Request $request){


        $dt = new \DateTime();

        $data = [
            'name' => $request->input('name'), 'sex' => $request->input('sex'),
            'age' => $request->input('age'), 'email' => $request->input('email'),
            'amount' => $request->input('amount'), 'phone' => $request->input('phone'),
            'other' => $request->input('other')
        ];

        DB::table('contact')->insert($data);
        $emails = ['chittapuu@gmail.com'];

        $data = [
            'name' => $request->input('name'), 'sex' => $request->input('sex'),
            'age' => $request->input('age'), 'email' => $request->input('email'),
            'amount' => $request->input('amount'), 'phone' => $request->input('phone'),
            'other' => $request->input('other'), 'time' => $dt->format('Y-m-d H:i:s')
        ];

        Mail::send('emails.customerRequest', $data, function($message) use ($emails, $request)
        {
            $sender = 'info@chicker.com';
            $subject = 'AIA Chicker K.'.$request->input('name').' amount : '.$request->input('amount');

            $message->from ($sender, 'chicker' );
            $message->returnPath($sender);
            $message->to($emails)->subject($subject);
        });



//        $data = [
//            'name' => $request->input('name'), 'sex' => $request->input('sex'),
//            'age' => $request->input('age'), 'email' => $request->input('email'),
//            'amount' => $request->input('amount'), 'phone' => $request->input('phone'),
//            'other' => $request->input('other')
//        ];
//
//        DB::table('contact')->insert($data);
//
//
//        $title = 'This is test e-mail';
//        $content = 'chittapuu@gmail.com';
//
//        $dt = new DateTime();
//        $dt->format('Y-m-d H:i:s');
//        $data = [
//            'name' => $request->input('name'), 'sex' => $request->input('sex'),
//            'age' => $request->input('age'), 'email' => $request->input('email'),
//            'amount' => $request->input('amount'), 'phone' => $request->input('phone'),
//            'other' => $request->input('other'), 'time' => $dt
//        ];
//
//        $emails = ['chittapuu@gmail.com'];
//        Mail::send('emails.customerRequest', $data, function($message) use ($emails)
//        {
//            $sender = 'info@chicker.com';
//            $message->from ($sender, 'chicker' );
//            $message->returnPath($sender);
//            $message->replyTo($sender);
//            $message->to($emails)->subject('This is test e-mail');
//        });



    }



    /**
     * Insert contact.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */

    public  function customerToContactMail(Request $request){



    }

}

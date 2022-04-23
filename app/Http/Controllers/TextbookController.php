<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbook;

class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $txt = Textbook::get();
        return view('textbook',compact('txt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("addtextbook");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Textbook::create($request->all());
        // $test=new Textbook;
        // $test->school_id=$request->school;
        // $test->class_id=$request->class;
        // $test->subject=$request->subject;
        // $test->bookname=$request->bookname;
        // $test->publisher=$request->publisher;
        // $test->book_image=$request->book_image;
        // $test->hsn=$request->hsn;
        // $test->gst=$request->gst;
        // $test->price=$request->price;
        // $test->save();
        return redirect()->route('textbook.index')
->with('success','Company has been created successfully.');

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
        $textbook=Textbook::find($id);
        return view('textedit',compact('textbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Textbook $textbook)
    {
        $textbook->update($request->all());

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
}

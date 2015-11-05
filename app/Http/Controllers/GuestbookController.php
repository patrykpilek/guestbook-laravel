<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Guestbook::all();
        return view('guestbook.index', compact('entries'));

//        $entries = Guestbook::orderBy('created_at', 'desc')->get();
//        return view('guestbook.index', ['entries' => $entries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guestbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guestbook = Guestbook::create([
            'name' => $request->name, 
            'content' => $request->content
        ]);

        return redirect()->to('guestbook');
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
        $entries = Guestbook::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $entries->$field);
        }
        var_dump($data);
        return view('guestbook.edit', $data);
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
        $entries = Guestbook::findOrFail($id);
        $entries->delete();
        return redirect('guestbook')->withSuccess("The '$entries->entries' tag has been deleted.");
    }
}

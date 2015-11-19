<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestbookRequest;
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
        $entries = Guestbook::orderBy('created_at', 'desc')->get();
        return view('guestbook.index', compact('entries'));
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
     * @param GuestbookRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestbookRequest $request)
    {
        Guestbook::create($request->all());
        return redirect('guestbook')->withSuccess('New Messages Successfully Created.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entries = Guestbook::findOrFail($id);
        return view('guestbook.show', compact('entries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $entries = Guestbook::findOrFail($id);
//        $data = ['id' => $id];
//        foreach (array_keys($this->fields) as $field) {
//            $data[$field] = old($field, $entries->$field);
//        }
//        var_dump($data);
//        return view('guestbook.edit', $data);
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
        return redirect()
            ->route('guestbook.index')
            ->withSuccess("The '$entries->entries' tag has been deleted.");
    }
}

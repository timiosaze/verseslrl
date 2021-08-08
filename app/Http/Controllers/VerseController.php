<?php

namespace App\Http\Controllers;

use App\Models\Verse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class VerseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $verses = Verse::where('user_id', Auth::id())->simplePaginate(5);
        return view('app.index', compact('verses'));
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
        $request->validate([
            'the_verse' => 'required',
            'the_content' => 'required',
        ]);

        $verse = new Verse();
        $verse->the_verse = request('the_verse');
        $verse->the_content = request('the_content');
        $verse->user_id = Auth::id();
        
        if($verse->save()){
            Alert::success('Success', 'Verse saved');
            return redirect('/verses');
        } else {
            Alert::warning('Failed', 'Verse not saved');
            return redirect('/verses');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function show(Verse $verse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $verse = Verse::where('user_id', Auth::id())->findOrFail($id);

        return view('app.edit', compact('verse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        request()->validate([
            'the_verse' => 'required',
            'the_content' => 'required'
        ]);

        $verse = Verse::where('user_id', Auth::id())->findOrFail($id);
        $verse->the_verse = request('the_verse');
        $verse->the_content = request('the_content');
        
        if($verse->save()){
            Alert::success('Success', 'Verse updated');
            return redirect('/verses');
        } else {
            Alert::warning('Failed', 'Verse not updated');
            return redirect('/verses');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $verse = Verse::where('user_id', Auth::id())->findOrFail($id);

        if($verse->delete()){
            Alert::warning('Success', 'Verse deleted');
            return redirect('/verses');
        } else {
            Alert::warning('Failed', 'Verse not deleted');
            return redirect('/verses');
        }

    }
}

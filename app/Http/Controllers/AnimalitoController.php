<?php

namespace App\Http\Controllers;

use App\Animalitos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalitoController extends Controller
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
        return view('admin.rescataditos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rescataditos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animalitos  $animalitos
     * @return \Illuminate\Http\Response
     */
    public function show(Animalitos $animalitos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animalitos  $animalitos
     * @return \Illuminate\Http\Response
     */
    public function edit(Animalitos $animalitos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animalitos  $animalitos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animalitos $animalitos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animalitos  $animalitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animalitos $animalitos)
    {
        //
    }
}

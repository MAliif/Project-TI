<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = Pasien::paginate(5);
        return view('pasien.index', ['pasien' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pasien::create($request->all());
        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        // dd($request);
        $pasien = Pasien::findOrFail($request);
        return view('pasien.detail', ['data' => $pasien]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($request)
    {
        $pasien = Pasien::findOrFail($request);
        return view('pasien.edit', ['data' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $noreg)
    {
        // dd($noreg);
        $pasien = Pasien::findOrFail($noreg);
        $pasien->update($request->all());
        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($noreg)
    {
        $pasien = Pasien::findOrFail($noreg);
        $pasien->delete();

        // if ($deletemurid) {
        //     Session::flash('status', 'danger');
        //     Session::flash('message', 'Delete Student Success!');
        // }

        // DB::table('alifs')->where('id', $id)->delete();
        return redirect('/pasien');
    }
}

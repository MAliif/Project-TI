<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasienCreateRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $paginate = Pasien::paginate(5);
        return view('pasien.index', ['pasien' => $paginate]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(PasienCreateRequest $request)
    {
        // dd($request);
        Pasien::create($request->all());
        return redirect('/pasien');
    }

    public function show($request)
    {
        // dd($request);
        $pasien = Pasien::findOrFail($request);
        return view('pasien.detail', ['data' => $pasien]);
    }

    public function edit($request)
    {
        $pasien = Pasien::findOrFail($request);
        return view('pasien.edit', ['data' => $pasien]);
    }

    //* TUGAS YANG INI
    public function update(Request $request, $noreg)
    {
        // dd($noreg);
        $pasien = Pasien::findOrFail($noreg);
        $pasien->update($request->all());
        return redirect('/pasien');
    }

    public function destroy($noreg)
    {
        dd($noreg);
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

<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\TandaVital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PasienCreateRequest;

class PasienController extends Controller
{
    public function searching(Request $request)
    {
        $keyword = $request->Keyword;
        // dd($keyword);
        $pasien = Pasien::where('noreg', 'Like', '%' . $keyword . '%')->get();
        return view('welcome', ['pasien' => $pasien, 'keyword' => $keyword]);
    }

    public function index()
    {
        $pasien = Pasien::paginate(5);

        return view('pasien.index', compact('pasien'));
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
        $pasien = Pasien::with('tandaVital')->findOrFail($request);

        return view('pasien.detail', ['data' => $pasien]);
    }

    public function edit($request)
    {
        $pasien = Pasien::findOrFail($request);
        return view('pasien.edit', ['data' => $pasien]);
    }

    public function update(Request $request, $noreg)
    {
        // dd($noreg);
        $pasien = Pasien::findOrFail($noreg);
        $pasien->update($request->all());
        return redirect('/pasien');
    }

    public function destroy($noreg)
    {
        // dd($noreg);
        $pasien = Pasien::findOrFail($noreg);
        $pasien->delete();

        // if ($deletemurid) {
        //     Session::flash('status', 'danger');
        //     Session::flash('message', 'Delete Student Success!');
        // }

        // DB::table('alifs')->where('id', $id)->delete();
        return redirect('/pasien');
    }

    public function tandaVital()
    {
        $pasien = Pasien::get();
        return view('pasien.tv', ['pasien' => $pasien]);
    }

    public function tvstore(Request $request)
    {
        // dd($request);
        $create = TandaVital::create($request->all());
        if ($create) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil menambahkan tanda vital pada pasien!');
        }
        return redirect('/pasien');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Spelayanan;
use App\Http\Requests\StoreSpelayananRequest;
use App\Http\Requests\UpdateSpelayananRequest;
use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $sp=Spelayanan::with('izin','kategori')->paginate($pagination);
        return view('backend.dashboard.sp.sp',[
            'seluruhsp' =>$sp
        ])->with( key: 'i', value: ($request->input( key: 'page', default: 1)-1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.sp.create_sp',[
            'seluruhizin' => Izin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpelayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'izin_id' => 'required|unique:spelayanan',
            'category_id' => 'required', 
            'persyaratan' => 'required',
            'file' => 'file|mimes:pdf|max:2048'
            
        ]);

        

        if ($request->file('file')) {
            $validatedata['file'] = $request->file('file')->store('sp-files'); 
        }


        Spelayanan::create($validatedata);

        return redirect('/dashboard/sp')->with('success','Standar Pelayanan baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spelayanan  $spelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Spelayanan $spelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spelayanan  $spelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Spelayanan $spelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpelayananRequest  $request
     * @param  \App\Models\Spelayanan  $spelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpelayananRequest $request, Spelayanan $spelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spelayanan  $spelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spelayanan $spelayanan)
    {
        //
    }
}

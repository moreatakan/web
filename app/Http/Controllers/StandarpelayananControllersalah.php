<?php

namespace App\Http\Controllers;

use App\Models\standarpelayanan;
use App\Http\Requests\StorestandarpelayananRequest;
use App\Http\Requests\UpdatestandarpelayananRequest;
use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StandarpelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $sp=DB::table('standarpelayanan')->paginate($pagination);
        return view('backend.dashboard.sp.sp',[
            'seluruhsp' => $sp,
            'izin' => Izin::all()
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
     * @param  \App\Http\Requests\StorestandarpelayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'izin_id' => 'required|unique:standarpelayanan',
            'persyaratan' => 'required',
            'namafile' => 'file|mimes:pdf|max:2048'
            
        ]);

        
        if ($request->file('namafile')) {
            $validatedata['namafile'] = $request->file('namafile')->store('sp-files'); 
        }


        standarpelayanan::create($validatedata);

        return redirect('/dashboard/posts')->with('success','Post baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\standarpelayanan  $standarpelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(standarpelayanan $standarpelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\standarpelayanan  $standarpelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(standarpelayanan $standarpelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestandarpelayananRequest  $request
     * @param  \App\Models\standarpelayanan  $standarpelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestandarpelayananRequest $request, standarpelayanan $standarpelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\standarpelayanan  $standarpelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(standarpelayanan $standarpelayanan)
    {
        //
    }
}

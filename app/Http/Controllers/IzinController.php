<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Http\Requests\UpdateIzinRequest;
use App\Models\Categoryizin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $pagination = 10;
        $izin=DB::table('izin')->paginate($pagination);
        return view('backend.dashboard.izin.izin',[
            'izins' => $izin
        ])->with( key: 'i', value: ($request->input( key: 'page', default: 1)-1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.izin.create_izin',[
            'kategoris' => Categoryizin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIzinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'namaizin' => 'required|unique:izin',
            'slug' => 'required|unique:izin',
            'categoryizin_id' => 'required'
        ]);

        Izin::create($validatedata);

        return redirect('/dashboard/izin')->with('success','Jenis izin baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function show(Izin $izin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function edit(Izin $izin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIzinRequest  $request
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIzinRequest $request, Izin $izin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izin $izin)
    {
        //
    }

    public function chekSlug(Request $request)
    {   
        
        $slug = SlugService::createSlug(Izin::class, 'slug', $request->namaizin);
        return response()->json(['slug' => $slug]);
        
    }
}

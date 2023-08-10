<?php

namespace App\Http\Controllers;

use App\Models\Categoryizin;
use App\Http\Requests\StoreCategoryizinRequest;
use App\Http\Requests\UpdateCategoryizinRequest;
use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryizinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $pagination = 10;
        $kategoriizin=DB::table('categoryizin')->paginate($pagination);
        return view('backend.dashboard.categoryizin.categoryizin',[
            'kategoriizin' => $kategoriizin
        ])->with( key: 'i', value: ($request->input( key: 'page', default: 1)-1) * $pagination);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.categoryizin.create_categoryizin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryizinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'namakategori' => 'required|unique:categoryizin',
            'slug' => 'required|unique:categoryizin'            
        ]);

        
        Categoryizin::create($validatedata);

        return redirect('/dashboard/categoryizin')->with('success','Kategori izin baru berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryizin  $categoryizin
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryizin $categoryizin)
    {
        return view('backend.dashboard.categoryizin.detail_categoryizin',[
            'kategoriizin' => $categoryizin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryizin  $categoryizin
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryizin $categoryizin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryizinRequest  $request
     * @param  \App\Models\Categoryizin  $categoryizin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryizinRequest $request, Categoryizin $categoryizin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryizin  $categoryizin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryizin $categoryizin)
    {
        Categoryizin::destroy($categoryizin->id);
        return redirect('/dashboard/categoryizin')->with('success','Data kategori izin berhasil dihapus');
    }

    public function chekSlug(Request $request)
    {   
        
        $slug = SlugService::createSlug(Categoryizin::class, 'slug', $request->namakategori);
        return response()->json(['slug' => $slug]);
        
    }

    public function getCategoryByIzin($id)
    {
        $category = Izin::find($id)->category;     
        return response()->json($category);
    }
}

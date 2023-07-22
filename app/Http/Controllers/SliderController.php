<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend/dashboard/slider/slider',[
            'slides' => Slide::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend/dashboard/slider/create_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        

        $validatedata = $request->validate([
            'judul_slide' => 'required',
            'image' => 'image|file',
            'status' => 'required'
            
        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('slider-images'); 
        }

        $data=Slide::create($validatedata);
        return redirect('/dashboard/slider')->with('success','Slider Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Slide::where('id',$id)->first();
        return view('backend/dashboard/slider/edit_slider',[
            'data' => $data
        ]);
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
        $validatedata = $request->validate([
            'judul_slide' => 'required',
            'status' => 'required'
        ]);
        Slide::where('id',$id)->update($validatedata);
        return redirect('/dashboard/slider')->with('success','Slider berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=Slide::find($id);
        $slider_image=$image->image;
        Storage::delete($slider_image);

        Slide::where('id',$id)->delete();
        return redirect('/dashboard/slider')->with('success','Slider berhasil di hapus');
    }
}

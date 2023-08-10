<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $pagination = 10;
        $post = Post::where('user_id', auth()->user()->id)->latest()->paginate($pagination);        

        return view('backend/dashboard/post/posts',[
        'title' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
        'posts' => $post
    ])->with( key: 'i', value: ($request->input( key: 'page', default: 1)-1) * $pagination);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend/dashboard/post/create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'image|file|mimes:png,jpg,JPEG'
            
        ]);

        $validatedata['user_id'] = auth()->user()->id;
        $validatedata['excerpt'] = Str::limit(strip_tags($request->body),200);
        
        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('posts-images'); 
        }


        Post::create($validatedata);

        return redirect('/dashboard/posts')->with('success','Post baru telah ditambahkan');
        

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend/dashboard/post/detail_post',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('backend/dashboard/post/edit_post',[
            'post' => $post
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $rules = [
            'judul' => 'required',
            'body' => 'required'
            
        ];

        if($request->slug != $post->slug)
        {
            $rules['slug'] =  'required|unique:posts';
        }

        $validatedata = $request->validate($rules);
        $validatedata['user_id'] = auth()->user()->id;
        $validatedata['excerpt'] = Str::limit(strip_tags($request->body),200);
        
        Post::where('id',$post->id)->update($validatedata);

        return redirect('/dashboard/posts')->with('success','Data post berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success','Data post berhasil dihapus');
    }

    public function chekSlug(Request $request)
    {   
        
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
        
    }
}

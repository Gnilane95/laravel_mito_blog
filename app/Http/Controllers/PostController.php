<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Images;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\ListOfCategory;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1-Retrieve all post from models Post and saved in variable
        // $posts = Post::all();
        $posts = Post::orderBy('updated_at','desc')->paginate(4);
        // dd($posts);
        //2-Send data to view
        return view('pages.home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ListOfCategory::all();

        return view('pages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // dd($request->all());
        //dd($request->file('url_img'));

        $request->validate([
            'title'=>'required|min:5|string|max:180',//min 5 characters, max 5 characters
            'content'=>'required|min:20|max:1000|string',
            'url_img'=>'required|image|mimes:png,jpg,jpeg,webp|max:5000',
            'category'=>'required'
        ]);

        $validateImg = $request->file('url_img')->store('posts');

        $new_post = Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'url_img'=>$validateImg,
            'created_at'=>now()
        ]);

        // 1-Verify if user select image or not
        if($request->has('images')){
            // 2-Stock all images selected in array
            $imagesSelected = $request->file('images');
            // 3- Loop storage each image
            foreach ($imagesSelected as $image) {
                // 4-Give a new name for each image
                $image_name = md5(rand(1000, 10000)). '.' . strtolower($image->extension());
                // 5-Set uhe passname
                $path_upload = 'img/images/';
                $image->move(public_path($path_upload), $image_name);

                Images::create([
                    "slug"=>$path_upload .'/'.$image_name, // posts/images/shhgfythgn.png
                    "created_at"=>now(),
                    "post_id"=> $new_post->id,
                ]);
            }
        }

        Category::create([
            'name'=>$request->category,
            'post_id'=>$new_post->id,
            "created_at"=>now()
        ]);

        return redirect()
            ->route('home')
            ->with('status', 'Le post a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd($post);
        return view ('pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('pages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //verify is_published

        $published = 0;
        if($request->has('is_published')){
            $published = 1;
        }

        // 1-Verify if user select image or not
        if($request->has('images')){
            // 2-Stock all images selected in array
            $imagesSelected = $request->file('images');
            // 3- Loop storage each image
            foreach ($imagesSelected as $image) {
                // 4-Give a new name for each image
                $image_name = md5(rand(1000, 10000)). '.' . strtolower($image->extension());
                // 5-Set the passname
                $path_upload = 'img/images/';
                $image->move(public_path($path_upload), $image_name);

                Images::create([
                "slug"=>$path_upload .'/'.$image_name, // posts/images/shhgfythgn.png
                "created_at"=>now(),
                "post_id"=> $post->id,
                ]);
            }
        }

        //verify if file exist
        //if file exist delete previous img
        if($request->hasFile('url_img')){
            //delete previous image
            Storage::delete($post->url_img);
            //store the new image
            $post->url_img = $request->file('url_img')->store('posts');
        };

        $request->validate([
        'title'=>'required|min:5|string|max:180',//min 5 characters, max 5 characters
        'content'=>'required|min:20|max:1000|string',
        'url_img'=>'required|image|mimes:png,jpg,jpeg,webp|max:5000',
        ]);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'url_img'=>$post->url_img,
            'is_published'=>$published,
            'updated_at'=>now()
        ]) ;
        
        return redirect()
        ->route('home')
        ->with('status', 'Le post a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()
            ->route('home')
            ->with('status', "L'article a bien été supprimé");
    }
    /**
     * Return all post view
     * 
     * @return void
     */
    public function allPosts()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(5) ;
        return view('pages.all-posts', compact('posts'));
    }

    public function removeImg($id)
    {
        // 1-Find the real image with his id
        $image = Images::find($id);

        if(!$image){
            abort(404);
        }

        // 2-Delete image in the actually folder
        unlink(public_path($image->slug));   //public/img/images/hcgyhjsjx.jpg
        // 3-Delete image from BDD
        $image->delete();

        // 4- Redirect
        return back()->with('status',"L'image a bien été supprimée");
    }
    
}

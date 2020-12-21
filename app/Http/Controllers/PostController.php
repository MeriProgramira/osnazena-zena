<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc' )->get();
        return view('posts.blog', compact('posts'));
    }

    public function indexBlog($id)
    {
        $post = Post::find($id);
        return view('posts.show_post', compact('post'));
    }

    public function indexDashboard()
    {
        $posts = Post::orderBy('created_at','desc' )->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'keywords' => 'required|max:255',
            'active' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $this->uploadImage($request);

        $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'keywords' => $request->keywords,
            'active' => $request->active,
            'image' => $path,
        ]);

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);
    }

    private function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $file = $request->file('image');
        if (!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $path = '/uploads/' . $file->getClientOriginalName();


        $file->move('uploads', $file->getClientOriginalName());
        return $path;
    }

    public function edit($id) {

        $post = Post::find($id);
        return view('posts.update', compact('post'));

    }

    public function updatePost(Request $request, $id) {

        $post = Post::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'keywords' => 'required|max:255',
            'active' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $post->image = $path;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->keywords = $request->input('keywords');
        $post->active = $request->input('active');

        $post->save();

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);
        //->with('success', 'Post je uspjesno azuriran');

    }

    public function destroy(Post $post) {

        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}

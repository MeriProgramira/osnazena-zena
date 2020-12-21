<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at','desc' )->get();
        return view('news.news', compact('news'));
    }

    public function indexNews($id)
    {
        $new = News::find($id);
        return view('news.show_news', compact('new'));
    }

    public function indexDashboard()
    {
        $news = News::orderBy('created_at','desc' )->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'active' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $this->uploadImage($request);

        $request->user()->news()->create([
            'title' => $request->title,
            'content' => $request->content,
            'active' => $request->active,
            'category' => $request->category,
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

        $new = News::find($id);
        return view('news.update', compact('new'));

    }

    public function updateNews(Request $request, $id) {

        $new = News::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'active' => 'required',
            'category' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $new->image = $path;
        }

        $new->title = $request->input('title');
        $new->content = $request->input('content');
        $new->active = $request->input('active');
        $new->category = $request->input('category');

        $new->save();

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name)->with('success', 'Post je uspjesno azuriran');
        //->with('success', 'Post je uspjesno azuriran');

    }

    public function destroy(News $new) {

        $this->authorize('delete', $new);
        $new->delete();
        return back();
    }
}

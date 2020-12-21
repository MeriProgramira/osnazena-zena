<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at','desc' )->get();
        return view('projects.projects', compact('projects'));
    }

    public function indexProject($id)
    {
        $project = Project::find($id);
        return view('projects.show_project', compact('project'));
    }

    public function indexDashboard()
    {
        $projects = Project::orderBy('created_at','desc' )->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'active' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $this->uploadImage($request);

        $request->user()->projects()->create([
            'title' => $request->title,
            'content' => $request->content,
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

        $project = Project::find($id);
        return view('projects.update', compact('project'));

    }

    public function updateProject(Request $request, $id) {

        $project = Project::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'active' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $project->image = $path;
        }

        $project->title = $request->input('title');
        $project->content = $request->input('content');
        $project->active = $request->input('active');

        $project->save();

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name)->with('success', 'Post je uspjesno azuriran');
        //->with('success', 'Post je uspjesno azuriran');

    }

    public function destroy(Project $project) {

        $this->authorize('delete', $project);
        $project->delete();
        return back();
    }
}

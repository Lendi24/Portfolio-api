<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
        ]);

        return Project::create([
            'title'             => $request->title,
            'description'       => $request->description,

            'image_URL'         => 'img',
            'writeup_URL'       => 'write',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return (Project::find($id));
    }

    public function showLang($id)
    {
        return (Project::find($id) -> appliedLanguageTags);
    }

    public function showPlat($id)
    {
        return (Project::find($id) -> appliedPlattformTags);
    }

    public function showPeop($id)
    {
        return ('');
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
        $object = Project::find($id);
        $object->update($request->all());
        return $object;
    }

    /**
     * Looks for a object given its name.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($q)
    {
        return Project::where('title', 'like', '%'.$q.'%')
        ->orWhere('description', 'like', '%'.$q.'%')
        ->get();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Project::destroy($id);
    }
}

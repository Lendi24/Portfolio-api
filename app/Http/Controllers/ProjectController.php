<?php

namespace App\Http\Controllers;

use App\Models\AppliedContactTag;
use App\Models\AppliedLanguageTag;
use App\Models\AppliedPersonOnProject;
use App\Models\AppliedPlattformTag;
use App\Models\LanguageTag;
use App\Models\PlattformTag;
use Illuminate\Http\Request;
use App\Models\Project;
use GuzzleHttp\Psr7\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnObj = [];
        foreach (Project::all() as $key => $value) {
            $returnObj[$key] = ["projectData" => $value];
        }
        return (/*array_reverse*/($returnObj));
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
            'image'             => 'required',
            /*
            'plattforms'        => 'required',
            'authors'           => 'required',*/
        ]);



        //AppliedPersonOnProject::create();
        //AppliedPlattformTag::create();

        //imagepng(imagecreatefromstring(file_get_contents($filename)), "output.png");
        $returnObj = Project::create([
            'title'             => $request->title,
            'description'       => $request->description,

            'image_URL'         => '',
            'writeup_URL'       => 'write',
        ]);

        $imageName = 'thumbnail-'.$returnObj->id.'.'.$request->image->extension();
        $request->image->move(storage_path('images/projects'), $imageName);

        $project = Project::find($returnObj->id);
        $project->image_URL = '/api/v1/projects/'.$returnObj->id.'/img/thumbnail';
        $project->save();

        return $returnObj;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id) { 
        $appliedLanguageTags  = (AppliedLanguageTag::select('language_tag_id')->where('project_id','=',$id) -> get());        
        $appliedPlattformTags = (AppliedPlattformTag::select('plattform_tag_id', 'target')->where('project_id','=',$id) -> get()); 
        $appliedPeople        = (AppliedPersonOnProject::select('person_id', 'order')->where('project_id','=',$id) -> get());

        $project = (Project::find($id));

        return [
            'projectData' => $project,
            'tags' => [
                'languageTags' => $appliedLanguageTags,
                'plattformTags' => $appliedPlattformTags,    
                'people' => $appliedPeople,
            ],
        ];
    }
    public function showLang($id) { return (Project::find($id) -> appliedLanguageTags); }
    public function showPlat($id) { return (Project::find($id) -> appliedPlattformTags); }
    public function showPeop($id) { return (''); }
    //public function getLen() { return (Project::find(0)); }

    //public function getLen() { return (Project::all()); }

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

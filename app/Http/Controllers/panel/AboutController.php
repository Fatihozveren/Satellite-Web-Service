<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                "name" => "string|max:255",
                "surname" => "string|max:255",
                "working_area" => "string|max:255",
                "instagram" => "string|max:255",
                "linkedin" => "string|max:255",
                "github" => "string|max:255",
                "web" => "string|max:255",

            ],

        );
        $about = new About();
        $about->name = \App\Helper\Helper::scriptStripper($request->name);
        $about->surname = \App\Helper\Helper::scriptStripper($request->surname);
        $about->working_area = \App\Helper\Helper::scriptStripper($request->working_area);
        $about->instagram_link = \App\Helper\Helper::scriptStripper($request->instagram);
        $about->linkedln_link = \App\Helper\Helper::scriptStripper($request->linkedin);
        $about->github_link = \App\Helper\Helper::scriptStripper($request->github);
        $about->web_address = \App\Helper\Helper::scriptStripper($request->web);
        $about->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.about.index');
    }

    function fetch()
    {
        $abouts = About::all();
        return DataTables::of($abouts)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateAbout(" . $data->id . ")' class='btn btn-warning'>Update</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteAbout(" . $data->id . ")' class='btn btn-danger'>Delete</button>";
            })
            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        About::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $abouts = About::where('id', $request->id)->first();
        return response()->json(['name' => $abouts->name, 'surname' => $abouts->surname, 'working_area' => $abouts->working_area, 'instagram_link' => $abouts->instagram_link, 'linkedln_link' => $abouts->linkedln_link, 'github_link' => $abouts->github_link, 'web_address' => $abouts->web_address]);

    }

    function update(Request $request)
    {
        $request->validate([
            "name" => "string|max:255",
            "surname" => "string|max:255",
            "working_area" => "string|max:255",
            "instagram_link" => "string|max:255",
            "linkedln_link" => "string|max:255",
            "github_link" => "string|max:255",
            "web_address" => "string|max:255",
        ]);

        About::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->name),
            'surname' => \App\Helper\Helper::scriptStripper($request->surname),
            'working_area' => \App\Helper\Helper::scriptStripper($request->working_area),
            'instagram_link' => \App\Helper\Helper::scriptStripper($request->instagram_link),
            'linkedln_link' => \App\Helper\Helper::scriptStripper($request->linkedln_link),
            'github_link' => \App\Helper\Helper::scriptStripper($request->github_link),
            'web_address' => \App\Helper\Helper::scriptStripper($request->web_address),

        ]);
        return response()->json(['Success' => 'success']);
    }

}

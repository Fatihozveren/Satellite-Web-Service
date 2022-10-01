<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Satellite;
use App\Models\Scientist;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ScientistController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                "scientist_name" => "string|max:255|required",
                "scientist_surname" => "string|max:255|required",
                "description" => "nullable",

            ],

        );
        $scientist = new Scientist();
        $scientist->name = \App\Helper\Helper::scriptStripper($request->scientist_name);
        $scientist->surname = \App\Helper\Helper::scriptStripper($request->scientist_surname);
        $scientist->description = \App\Helper\Helper::scriptStripper($request->description);
        $scientist->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.scientist.index');
    }

    function fetch()
    {
        $scientist = Scientist::all();
        return DataTables::of($scientist)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateScientist(" . $data->id . ")' class='btn btn-warning'>Update</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteScientist(" . $data->id . ")' class='btn btn-danger'>Delete</button>";
            })
            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        Scientist::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $scientists = Scientist::where('id', $request->id)->first();
        return response()->json(['name' => $scientists->name, 'surname' => $scientists->surname, 'description'=>$scientists->description,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'scientist_name' => 'required',
            'scientist_surname' => 'required',
            'description' => 'nullable',
        ]);

        Scientist::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->scientist_name),
            'surname' => \App\Helper\Helper::scriptStripper($request->scientist_surname),
            'description' => \App\Helper\Helper::scriptStripper($request->description),

        ]);
        return response()->json(['Success' => 'success']);
    }



}


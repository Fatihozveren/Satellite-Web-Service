<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\LaunchPad;
use App\Models\Satellite;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LaunchpadController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                "launchpad_name" => "string|max:255|required",

            ],

        );
        $category = new LaunchPad();
        $category->name = \App\Helper\Helper::scriptStripper($request->launchpad_name);
        $category->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.launchpad.index');
    }

    function fetch()
    {
        $launchpad = LaunchPad::all();
        return DataTables::of($launchpad)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateLaunchpad(" . $data->id . ")' class='btn btn-warning'>Update</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteLaunchpad(" . $data->id . ")' class='btn btn-danger'>Delete</button>";
            })
            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        LaunchPad::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $launchpad = LaunchPad::where('id', $request->id)->first();
        return response()->json(['launchpad_name' => $launchpad->name]);

    }

    function update(Request $request)
    {
        $request->validate([
            'launchpad_name' => 'required',
        ]);

        LaunchPad::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->launchpad_name),

        ]);
        return response()->json(['Success' => 'success']);
    }

}

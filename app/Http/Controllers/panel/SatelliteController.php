<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LaunchPad;
use App\Models\Satellite;
use App\Models\Scientist;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as img;
use Yajra\DataTables\DataTables;

class SatelliteController extends Controller
{
    public function create(Request $request)
    {

        $request->validate(
            [
                "name" => "string|max:255",
                "mission_name" => "string|max:255",
                "link" => "string|max:255",
                "launch_date" => "nullable",
                "complete_date" => "nullable",
                "altitude" => "numeric",
                "inclination" => "numeric",
                "instruments" => "string|max:255",
                'image'=>'image|mimes:jpeg,png,jpg',
                'image2'=>'image|mimes:jpeg,png,jpg',
                "description" => "string",
                "category" => "string",
                "status" => "string",
                "scientist" => "string",
                "scientist2" => "string",
                "launch_location" => "string",
            ],

        );
        $satellite = new Satellite();
        $satellite->name = \App\Helper\Helper::scriptStripper($request->name);
        $satellite->mission_name = \App\Helper\Helper::scriptStripper($request->mission_name);
        $satellite->link = \App\Helper\Helper::scriptStripper($request->link);
        $satellite->launch_date = \App\Helper\Helper::scriptStripper($request->launch_date);
        $satellite->complete_date = \App\Helper\Helper::scriptStripper($request->complete_date);
        $satellite->altitude = \App\Helper\Helper::scriptStripper($request->altitude);
        $satellite->inclination = \App\Helper\Helper::scriptStripper($request->inclination);
        $satellite->instruments = \App\Helper\Helper::scriptStripper($request->instruments);
        $satellite->description = \App\Helper\Helper::scriptStripper($request->description);
        $satellite->category = \App\Helper\Helper::scriptStripper($request->category);
        $satellite->status = \App\Helper\Helper::scriptStripper($request->status);
        $satellite->scientist = \App\Helper\Helper::scriptStripper($request->scientist);
        $satellite->launch_location = \App\Helper\Helper::scriptStripper($request->launch_location);

        if ($request->hasFile('image2')){
            $name=public_path('uploads/images2/');
            if (!file_exists($name)) {
                mkdir($name, 0700);
            }
            $imageName2=$request->name.'2.'.$request->image2->getClientOriginalExtension();
            $request->image2->move(public_path('uploads/images2/'),$imageName2);
            $satellite->image_2 = $imageName2;
        }

        if ($request->hasFile('image')){
            $name=public_path('uploads/images/');
            if (!file_exists($name)) {
                mkdir($name, 0700);
            }
            $imageName=$request->name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'),$imageName);
            $satellite->image = $imageName;
        }

        $satellite->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        $categories=Category::all();
        $status=Status::all();
        $scientist=Scientist::all();
        $launchpad=LaunchPad::all();
        return view('panel.pages.satellite.index', compact('categories', 'scientist','status','launchpad'));
    }

    function fetch()
    {
        $satellites = Satellite::all();
        return DataTables::of($satellites)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateSatellite(" . $data->id . ")' class='btn btn-warning'>Update</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteSatellite(" . $data->id . ")' class='btn btn-danger'>Delete</button>";
            })

            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        Satellite::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $satellites = Satellite::where('id', $request->id)->first();
        return response()->json(['name' => $satellites->name, 'mission_name' => $satellites->mission_name, 'link' => $satellites->link, 'launch_date' => $satellites->launch_date, 'complete_date' => $satellites->complete_date, 'altitude' => $satellites->altitude, 'inclination' => $satellites->inclination, 'instruments' => $satellites->instruments, 'description' => $satellites->description,
            'investigators' => $satellites->investigators,  'category' => $satellites->category, 'status' => $satellites->status, 'scientist' => $satellites->scientist,'scientist2' => $satellites->scientist2,'launch_location' => $satellites->launch_location, 'image' => $satellites->image, 'image_2' => $satellites->image_2]);

    }

    function update(Request $request)
    {
        $request->validate([
            "name" => "string|max:255",
            "mission_name" => "string|max:255",
            "link" => "string|max:255",
            "launch_date" => "nullable",
            "complete_date" => "nullable",
            "altitude" => "numeric",
            "inclination" => "numeric",
            "instruments" => "string|max:255",
            "image" => "string|max:255",
            "image_2" => "string|max:255",
            "description" => "string",
            "category" => "string",
            "status" => "string",
            "scientist" => "string",
            "scientist2" => "string",
            "launch_location" =>"string",
        ]);

        Satellite::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->name),
            'mission_name' => \App\Helper\Helper::scriptStripper($request->mission_name),
            'link' => \App\Helper\Helper::scriptStripper($request->link),
            'launch_date' => \App\Helper\Helper::scriptStripper($request->launch_date),
            'complete_date' => \App\Helper\Helper::scriptStripper($request->complete_date),
            'altitude' => \App\Helper\Helper::scriptStripper($request->altitude),
            'inclination' => \App\Helper\Helper::scriptStripper($request->inclination),
            'instruments' => \App\Helper\Helper::scriptStripper($request->instruments),
            'description' => \App\Helper\Helper::scriptStripper($request->description),
            'category' => \App\Helper\Helper::scriptStripper($request->category),
            'status' => \App\Helper\Helper::scriptStripper($request->status),
            'scientist' => \App\Helper\Helper::scriptStripper($request->scientist),
            'scientist2' => \App\Helper\Helper::scriptStripper($request->scientist2),
            'launch_location' => \App\Helper\Helper::scriptStripper($request->launch_location),
            'image' => \App\Helper\Helper::scriptStripper($request->image),
            'image_2' => \App\Helper\Helper::scriptStripper($request->image_2),

        ]);
        return response()->json(['Success' => 'success']);
    }



}

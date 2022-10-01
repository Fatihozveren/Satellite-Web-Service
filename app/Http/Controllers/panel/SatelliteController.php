<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Satellite;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SatelliteController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            [
                "category_name" => "string|max:255|required",

            ],
            [

                'category_name.required' => 'Kategori Adı boş bırakılamaz.',
                'category_name.string' => 'Kategori Adı alanında uygun olmayan karakter görüldü.',

            ]
        );
        $category = new Satellite();
        $category->name = \App\Helper\Helper::scriptStripper($request->category_name);
        $category->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.satellite.index');
    }

    function fetch()
    {
        $satellites = Satellite::all();
        return DataTables::of($satellites)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateSatellite(" . $data->id . ")' class='btn btn-warning'>Güncelle</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteSatellite(" . $data->id . ")' class='btn btn-danger'>Sil</button>";
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
        $categories = Satellite::where('id', $request->id)->first();
        return response()->json(['category_name' => $categories->name,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Satellite::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->category_name),

        ]);
        return response()->json(['Success' => 'success']);
    }



}

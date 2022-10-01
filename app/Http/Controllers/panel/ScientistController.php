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
                "category_name" => "string|max:255|required",

            ],
            [

                'category_name.required' => 'Kategori Adı boş bırakılamaz.',
                'category_name.string' => 'Kategori Adı alanında uygun olmayan karakter görüldü.',

            ]
        );
        $category = new Scientist();
        $category->name = \App\Helper\Helper::scriptStripper($request->category_name);
        $category->save();
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
                return "<button onclick='updateScientist(" . $data->id . ")' class='btn btn-warning'>Güncelle</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteScientist(" . $data->id . ")' class='btn btn-danger'>Sil</button>";
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
        $categories = Scientist::where('id', $request->id)->first();
        return response()->json(['category_name' => $categories->name,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Scientist::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->category_name),

        ]);
        return response()->json(['Success' => 'success']);
    }



}


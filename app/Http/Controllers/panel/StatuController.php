<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Scientist;
use App\Models\Status;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StatuController extends Controller
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
        $category = new Status();
        $category->name = \App\Helper\Helper::scriptStripper($request->category_name);
        $category->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.statu.index');
    }

    function fetch()
    {
        $status = Status::all();
        return DataTables::of($status)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateStatu(" . $data->id . ")' class='btn btn-warning'>Güncelle</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteStatu(" . $data->id . ")' class='btn btn-danger'>Sil</button>";
            })
            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        Status::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $status = Status::where('id', $request->id)->first();
        return response()->json(['category_name' => $status->name,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Status::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->category_name),

        ]);
        return response()->json(['Success' => 'success']);
    }



}


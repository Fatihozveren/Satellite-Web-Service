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
                "statu_name" => "string|max:255|required",

            ],

        );
        $statu = new Status();
        $statu->name = \App\Helper\Helper::scriptStripper($request->statu_name);
        $statu->save();
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
        return response()->json(['statu_name' => $status->name,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'statu_name' => 'required',
        ]);

        Status::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->statu_name),

        ]);
        return response()->json(['Success' => 'success']);
    }



}


<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
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
        $category = new Category();
        $category->name = \App\Helper\Helper::scriptStripper($request->category_name);
        $category->save();
        return response()->json(['Success' => 'success']);


    }

    public function list()
    {
        return view('panel.pages.category.index');
    }

    function fetch()
    {
        $categories = Category::all();
        return DataTables::of($categories)
            ->addColumn('update', function ($data) {
                return "<button onclick='updateCategory(" . $data->id . ")' class='btn btn-warning'>Güncelle</button>";
            })->addColumn('delete', function ($data) {
                return "<button onclick='deleteCategory(" . $data->id . ")' class='btn btn-danger'>Sil</button>";
            })
            ->rawColumns(['update', 'delete'])
            ->make(true);
    }

    function delete(Request $request)
    {
        $request->validate([
            'id' => 'distinct'
        ]);
        Category::find($request->id)->delete();
        return response()->json(['Success' => 'success']);
    }

    function get(Request $request)
    {
        $categories = Category::where('id', $request->id)->first();
        return response()->json(['category_name' => $categories->name,]);

    }

    function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Category::where('id', $request->updateId)->update([
            'name' => \App\Helper\Helper::scriptStripper($request->category_name),

        ]);
        return response()->json(['Success' => 'success']);
    }

}


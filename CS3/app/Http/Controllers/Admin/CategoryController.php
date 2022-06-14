<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view_category');
        // $categories = Category::get()->paginate(5);
        $paginate = Category::latest()->paginate(5);
        $categories = Category::all();
        return view('admin.categories.index', compact('categories', 'paginate'));
    }

    public function active($id)
    {
        Category::findOrFail($id)->update(['status' => 0]);
        return redirect()->route('categories.index');
    }

    public function unactive($id)
    {
        Category::findOrFail($id)->update(['status' => 1]);
        return redirect()->route('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create_category');
        // $this->authorize('create', Category::class);
        $categories = Category::orderBy('name', 'ASC')->get();
        $recusives = new Recusive($categories);
        $data = $recusives->showCategories($parent_id = '');
        // print_r($data->toArray());die;
////        foreach ($data as $value){
////            $data= $value->sub_categories->toArray();
////            echo '<pre>';
////            print_r($data);
////        }
        //  $data = $this->showCategories($data1);

        return view('admin.categories.create', compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = [
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'slug' => Str::slug($request->name)
        ];
        Category::create($input);
        Session::flash('success', 'Tạo mới danh mục thành công');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit_category');
        $data = Category::all();
        $recusives = new Recusive($data);
        $categories = Category::findOrFail($id);
        $data = $recusives->showCategories($categories->parent_id);
        return view('admin.categories.edit', compact('categories', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);

        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $this->authorize('delete_category');
        Category::findOrFail($id)->delete();
        return redirect()->route('categories.index');
    }
}

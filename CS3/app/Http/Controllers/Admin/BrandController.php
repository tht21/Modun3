<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();
        return view('admin.brands.index', compact('brands'));
    }

    public function active($id)
    {
        Brand::findOrFail($id)->update(['status' => 0]);
        return redirect()->route('brands.index');
    }

    public function unactive($id)
    {
        Brand::findOrFail($id)->update(['status' => 1]);
        return redirect()->route('brands.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Brand::get();
        return view('admin.brands.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Brand::create($input);
        Session::flash('success', 'Tạo mới nhãn  thành công');
       return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $brands = Brand::findOrFail($id);
        return view('admin.brands.update', compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brands = Brand::findOrFail($id);
        $input = $request->all();
        $brands->update($input);
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()->route('brands.index');
    }
}

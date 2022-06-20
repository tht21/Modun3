<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    private $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $staffs = $this->staff->select('*');
        $search = $request->search;
        if ($search) {
            $staffs = $staffs->where('username', 'like', '%' . $search . '%');
        }
        $staffs =$staffs->get();
        return view('staffs.includes.list', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.includes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {

        $data = [
            $this->staff->id = $request->id,
            $this->staff->group_staff = $request->group_staff,
            $this->staff->username = $request->username,
            $this->staff->date_birth = $request->date_birth,
            $this->staff->gender = $request->gender,
            $this->staff->phone = $request->phone,
            $this->staff->id_number = $request->id_number,
            $this->staff->email = $request->email,
            $this->staff->address = $request->address,
        ];
        $this->staff->save();
        return redirect()->route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = $this->staff->find($id);
        return view('staffs.includes.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, $id)
    {
        $staff = $this->staff->find($id);
        $data = [
            $staff->id = $request->id,
            $staff->group_staff = $request->group_staff,
            $staff->username = $request->username,
            $staff->date_birth = $request->date_birth,
            $staff->gender = $request->gender,
            $staff->phone = $request->phone,
            $staff->id_number = $request->id_number,
            $staff->email = $request->email,
            $staff->address = $request->address,
        ];
        // dd($data);
        $staff->save();
        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  echo 123;
        $this->staff->findOrFail($id)->delete();
        return redirect()->route('staffs.index');
    }
}

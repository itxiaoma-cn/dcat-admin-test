<?php

namespace App\Http\Controllers;

use App\Http\Resources\ColumnResource;
use App\Models\Column;
use App\Models\Location;
use Illuminate\Http\Request;

class ColumnController extends Controller
{
    public function index()
    {
        $columns = Column::join('locations', 'locations.column_id', '=', 'columns.id')
            ->select(
                'columns.id as column_id',
                'columns.name as column_name',
                'locations.address as column_address',
                'locations.location as column_location'
            )
            ->paginate(10);
        $data = $this->paginate($columns);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
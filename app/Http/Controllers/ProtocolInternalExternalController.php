<?php

namespace App\Http\Controllers;

use App\Models\ProtocolInternalExternal;
use App\Http\Requests\StoreProtocolInternalExternalRequest;
use App\Http\Requests\UpdateProtocolInternalExternalRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProtocolInternalExternalController extends Controller
{

    private function sendResponse($data, $message = null, $status = 200)
    {
        $response = [
            'data' => $data,
            'message' => $message,
            'status' => $status
        ];

        return response()->json($response, $status);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocols = ProtocolInternalExternal::all();
        return $this->sendResponse($protocols, 'Protocols retrieved successfully');
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
     * @param  \App\Http\Requests\StoreProtocolInternalExternalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProtocolInternalExternalRequest $request)
    {
        DB::beginTransaction();
        try {
            $protocol = ProtocolInternalExternal::create($request->all());
            DB::commit();
            return $this->sendResponse($protocol, 'Protocol created successfully', 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendResponse(null, 'Error while saving protocol', 500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProtocolInternalExternal  $protocolInternalExternal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $protocol = ProtocolInternalExternal::find($id);

        if (!$protocol) {
            return $this->sendResponse(null, 'Protocol not found', 404);
        }

        return $this->sendResponse($protocol, 'Protocol retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProtocolInternalExternal  $protocolInternalExternal
     * @return \Illuminate\Http\Response
     */
    public function edit(ProtocolInternalExternal $protocolInternalExternal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProtocolInternalExternalRequest  $request
     * @param  \App\Models\ProtocolInternalExternal  $protocolInternalExternal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProtocolInternalExternalRequest $request, $id)
    {
        $protocol = ProtocolInternalExternal::find($id);

        if (!$protocol) {
            return $this->sendResponse(null, 'Protocol not found', 404);
        }

        DB::beginTransaction();
        try {
            $protocol->update($request->all());
            DB::commit();
            return $this->sendResponse($protocol, 'Protocol updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendResponse(null, 'Error while updating protocol', 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProtocolInternalExternal  $protocolInternalExternal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $protocol = ProtocolInternalExternal::find($id);

        if (!$protocol) {
            return $this->sendResponse(null, 'Protocol not found', 404);
        }

        try {
            $protocol->delete();
            return $this->sendResponse(null, 'Protocol deleted successfully');
        } catch (\Exception $e) {
            \Log::error('Error while deleting Protocol Internal External: ' . $e->getMessage());
            return $this->sendResponse(null, 'Error while deleting protocol', 500);
        }
    }
}

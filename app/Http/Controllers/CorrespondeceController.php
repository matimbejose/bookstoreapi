<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCorrespondeceRequest;
use App\Http\Requests\UpdateCorrespondeceRequest;
use App\Models\Correspondece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorrespondeceController extends Controller
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
        $correspondences = Correspondece::all();
        return $this->sendResponse($correspondences, 'Correspondences retrieved successfully');
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
     * @param  \App\Http\Requests\StoreCorrespondeceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCorrespondeceRequest $request)
    {
        DB::beginTransaction();
        try {
            $correspondence = Correspondece::create($request->all());
            DB::commit();
            return $this->sendResponse($correspondence, 'Correspondence created successfully', 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendResponse(null, 'Error while saving correspondence', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Correspondece  $correspondece
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $correspondence = Correspondece::find($id);

        if (!$correspondence) {
            return $this->sendResponse(null, 'Correspondence not found', 404);
        }

        return $this->sendResponse($correspondence, 'Correspondence retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Correspondece  $correspondece
     * @return \Illuminate\Http\Response
     */
    public function edit(Correspondece $correspondece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCorrespondeceRequest  $request
     * @param  \App\Models\Correspondece  $correspondece
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCorrespondeceRequest $request, $id)
    {
        $correspondence = Correspondece::find($id);

        if (!$correspondence) {
            return $this->sendResponse(null, 'Correspondence not found', 404);
        }

        try {
            $correspondence->update($request->all());
            return $this->sendResponse($correspondence, 'Correspondence updated successfully');
        } catch (\Exception $e) {
            \Log::error('Error while updating Correspondence: ' . $e->getMessage());
            return $this->sendResponse(null, 'Error while updating correspondence', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Correspondece  $correspondece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $correspondence = Correspondece::find($id);

        if (!$correspondence) {
            return $this->sendResponse(null, 'Correspondence not found', 404);
        }

        try {
            $correspondence->delete();
            return $this->sendResponse(null, 'Correspondence deleted successfully');
        } catch (\Exception $e) {
            \Log::error('Error while deleting Correspondence: ' . $e->getMessage());
            return $this->sendResponse(null, 'Error while deleting correspondence', 500);
        }
    }
}

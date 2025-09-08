<?php
namespace App\Controllers;

use App\Models\UserModel;

class UserController
{
    // Example: GET /api/assessments
    public function index($request) {
        // Extract query params from request
        $orderBy   = $request->get('order_by', 'ID');   // default order by id
        $order     = $request->get('order', 'asc');     // default ASC
        $limit     = (int) $request->get('limit', 10);  // default 10 records
        $page      = (int) $request->get('page', 1);    // default first page
        $offset    = ($page - 1) * $limit;


        // Get total rows
        $totalRows = ParticipantModel::count();

        // Get paginated records
        $records = ParticipantModel::orderBy($orderBy, $order)
            ->skip($offset)
            ->take($limit)
            ->get();

        // Prepare response with extra params
        return [
            'total_rows' => $totalRows,
            'page'       => $page,
            'limit'      => $limit,
            'total_pages'=> ceil($totalRows / $limit),
            // 'order_by'   => $orderBy,
            // 'order'      => $order,
            'data' => $records,
        ];
    }

    // Example: GET /api/assessments/{id}
    public function show($request, $id) {
        return UserModel::find($id); // find by PK
    }

    // Example: POST /api/assessments
    public function store($data) {
        return UserModel::create($data);
    }

    // Example: PUT /api/assessments/{id}
    public function update($request, $id) {
        $data = $request->all();
        $assessment = UserModel::find($id);
        if ($assessment) {
            $assessment->update($data);
        }
        return $assessment;
    }

    // Example: DELETE /api/assessments/{id}
    public function destroy($id) {
        $assessment = UserModel::find($id);
        if ($assessment) {
            $assessment->delete();
        }
        return ['deleted' => (bool) $assessment];
    }
}

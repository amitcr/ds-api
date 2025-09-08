<?php
namespace App\Controllers;

use App\Models\UserMetaModel;

class UserMetaController
{
    // Example: GET /api/usermeta
    public function index($request) {
        // Extract query params from request
        $orderBy   = $request->get('order_by', 'meta_id');   // default order by id
        $order     = $request->get('order', 'asc');     // default ASC
        $limit     = (int) $request->get('limit', 10);  // default 10 records
        $page      = (int) $request->get('page', 1);    // default first page
        $offset    = ($page - 1) * $limit;


        // Get total rows
        $totalRows = UserMetaModel::count();

        // Get paginated records
        $records = UserMetaModel::orderBy($orderBy, $order)
            ->skip($offset)
            ->take($limit)
            ->get();

        // Prepare response with extra params
        return [
            'data' => $records,
            'meta' => [
                'total_rows' => $totalRows,
                'page'       => $page,
                'limit'      => $limit,
                'total_pages'=> ceil($totalRows / $limit),
                'order_by'   => $orderBy,
                'order'      => $order,
            ]
        ];
    }

    // Example: GET /api/usermeta/{id}
    public function show($request, $id) {
        return UserMetaModel::find($id); // find by PK
    }

    // Example: POST /api/usermeta
    public function store($data) {
        return UserMetaModel::create($data); 
    }

    // Example: PUT /api/usermeta/{id}
    public function update($request, $id) {
        $data = $request->all();
        $assessment = UserMetaModel::find($id);
        if ($assessment) {
            $assessment->update($data);
        }
        return $assessment;
    }

    // Example: DELETE /api/usermeta/{id}
    public function destroy($id) {
        $assessment = UserMetaModel::find($id);
        if ($assessment) {
            $assessment->delete();
        }
        return ['deleted' => (bool) $assessment];
    }
}

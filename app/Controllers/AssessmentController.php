<?php
namespace App\Controllers;

use App\Models\AssessmentModel;

class AssessmentController
{
    // Example: GET /api/assessments
    public function index() {
        return AssessmentModel::all(); // get all records
    }

    // Example: GET /api/assessments/{id}
    public function show($id) {
        return AssessmentModel::find($id); // find by PK
    }

    // Example: POST /api/assessments
    public function store($data) {
        return AssessmentModel::create($data);
    }

    // Example: PUT /api/assessments/{id}
    public function update($request, $id) {
        $data = $request->all();
        $assessment = AssessmentModel::find($id);
        if ($assessment) {
            $assessment->update($data);
        }
        return $assessment;
    }

    // Example: DELETE /api/assessments/{id}
    public function destroy($id) {
        $assessment = AssessmentModel::find($id);
        if ($assessment) {
            $assessment->delete();
        }
        return ['deleted' => (bool) $assessment];
    }
}

<?php
namespace App\Services\Api;

use App\Services\Http\BaseHttpService;

class SelfAssessmentResponsesService extends BaseHttpService
{
    protected string $endpoint = 'self-assessment-responses';

    public function list(array $query = [])
    {
        return $this->get($this->endpoint, $query);
    } 

    public function getById($id)
    {
        return $this->get("{$this->endpoint}/{$id}");
    }

    public function create(array $data)
    {
        return $this->post($this->endpoint, $data);
    }

    public function update($id, array $data)
    {
        return $this->put("{$this->endpoint}/{$id}", $data);
    }

    public function patchParticipant($id, array $data)
    {
        return parent::patch("{$this->endpoint}/{$id}", $data);
    }

    public function deleteById($id)
    {
        return parent::delete("{$this->endpoint}/{$id}");
    }
}

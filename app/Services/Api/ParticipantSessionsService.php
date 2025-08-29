<?php
namespace App\Services\Api;

use App\Services\Http\BaseHttpService;

class ParticipantSessionsService extends BaseHttpService
{
    protected string $endpoint = 'participant-sessions';

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

    public function patch($id, array $data)
    {
        return $this->patch("{$this->endpoint}/{$id}", $data);
    }

    public function delete($id)
    {
        return $this->delete("{$this->endpoint}/{$id}");
    }
}

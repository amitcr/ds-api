<?php
namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsService
{
    protected $client;
    protected $service;
    protected $spreadsheetId;

    public function __construct(string $spreadsheetId)
    {
        $this->spreadsheetId = $spreadsheetId;

        $this->client = new Client();
        $this->client->setAuthConfig(__DIR__ . '/../../credentials.json');
        $this->client->addScope(Sheets::SPREADSHEETS);

        $this->service = new Sheets($this->client);
    }

    /**
     * Append rows to Google Sheet
     */
    public function appendData(string $range, array $values)
    {
        $body = new \Google\Service\Sheets\ValueRange([
            'values' => $values
        ]);

        $params = ['valueInputOption' => 'RAW'];

        return $this->service->spreadsheets_values->append(
            $this->spreadsheetId,
            $range,
            $body,
            $params
        );
    }
}

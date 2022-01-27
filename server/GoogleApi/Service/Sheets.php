<?php

namespace App\GoogleApi\Service;

use Google_Service_Sheets;
use App\GoogleApi\Client;
use Google_Service_Sheets_ValueRange;

class Sheets {

    private Google_Service_Sheets $service;
    private string $spreadsheetId;

    public function __construct() {
        $this->service = new Google_Service_Sheets( (new Client())->getClient() );
        $this->spreadsheetId = $_ENV['SPREADSHEETID'];
    }

    /**
     * @param array $data
     * @return bool
     */
    public function addValues( array $data ): bool {
        $range = 'order_now';
        $requestBody = new Google_Service_Sheets_ValueRange();
        $requestBody->setValues( [$data] );
        $conf = ["valueInputOption" => "USER_ENTERED"];
        $result = $this->service->spreadsheets_values->append( $this->spreadsheetId, $range, $requestBody, $conf );
        if ( $result->updates->updatedRows ) {
            return true;
        }
        return false;
    }


}
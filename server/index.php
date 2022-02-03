<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\GoogleApi\Service\Sheets;
use App\Core\Form;
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->load( __DIR__ . '/.env' );

$POST = $_POST;

$form = new Form();

$data = $form->validator( $POST );

if ( $data['status'] ) {
    try {
        $res = (new Sheets())->addValues( [$data['data']['phone'], $data['data']['email'], $data['data']['name']] );
        if ( isset( $res ) && $res ) {
            $data['messages'] = ['Сообщение успешно отправлено'];
        }
    } catch ( \Google_Service_Exception $e ) {
        $data['status'] = false;
        $data['messages'] = [json_decode( $e->getMessage() )->error_description];
    }
}
echo json_encode( $data );
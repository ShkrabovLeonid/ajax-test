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
    $sheet = new Sheets();
    $res = $sheet->addValues( [$data['data']['phone'], $data['data']['email'], $data['data']['name']] );
    if ( $res ) {
        $data['messages'] = ['Сообщение успешно отправлено'];
    }
}
echo json_encode( $data );
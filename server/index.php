<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\GoogleApi\Service\Sheets;
use App\Core\Form;

$POST = $_POST;

$form = new Form();

$data = $form->validator( $POST );

if ( $data ) {
    $sheet = new Sheets();
    $sheet->addValues( [$data["phone"], $data["email"], $data["name"]] );
}
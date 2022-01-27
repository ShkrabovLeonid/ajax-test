<?php

namespace App\Core;

use Respect\Validation\Validator as v;

class Form {

    public function validator( $POST ) {
        $messages = [];
        $clear_POST = [];
        foreach ( $POST as $key => $value ) {
            $clear_POST[$key] = htmlspecialchars( $value );
        }

        $valid = md5( $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] );
        if ( $clear_POST['security'] !== $valid ) {
            $messages[] = 'Вы не прошли защиту от ботов';
        }
        if ( isset( $clear_POST['terms'] ) && !$clear_POST['terms'] ) {
            $messages[] = 'Примите условия';
        }
        if ( isset( $clear_POST['email'] ) && !v::email()->validate( $clear_POST['email'] ) ) {
            $messages[] = 'Не правильный формат email';
        }
        if ( isset( $clear_POST['phone'] ) && !v::phone()->validate( $clear_POST['phone'] ) ) {
            $messages[] = 'Не правильный формат телефона';
        }
        if ( isset( $clear_POST['name'] ) && !v::stringType()->length( 3, 15 )->validate( $clear_POST['name'] ) ) {
            $messages[] = 'Не правильный формат имени. Мин 3. Макс 15.';
        }
        if ( !$messages ) {
            return [
                "status" => true,
                "data" => $clear_POST,
            ];
        }
        return [
            "status" => false,
            "messages" => $messages
        ];
    }
}
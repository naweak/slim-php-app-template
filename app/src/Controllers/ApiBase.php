<?php
namespace Controllers;

use \Slim\Http\Response;

abstract class ApiBase extends Base {
    public function success ($data) {
        $response = new Response();

        return $response->withJson([
            "success" => $data
        ]);
    }

    public function error ($data, $code) {
        $response = new Response();

        return $response->withJson([
            "error" => [
                "data" => $data,
                "code" => $code
            ]
        ]);
    }
}

<?php


namespace Controllers;

use \Slim\Http\Request as Request;

class ApiDefault extends ApiBase
{
    public function test (Request $request) {
        return $this->success('хуй');
    }
}

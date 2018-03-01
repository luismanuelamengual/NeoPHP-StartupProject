<?php

namespace App;

use NeoPHP\Routing\Routes;

class MainController {

    public function main() {

        Routes::get("/", function () {
            return create_view("welcome", ["name" => get_current_user()]);
        });
    }
}
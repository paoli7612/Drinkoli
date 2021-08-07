<?php

use App\App;
use App\core\Database;

Database::reset();

App::set_log("Database resettato correttamente");

header('Location: /');
 ?>
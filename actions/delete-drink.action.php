<?php

    Drink::delete($database, Request::uri('drinks/', '?delete'));
    header('Location: /drinks');



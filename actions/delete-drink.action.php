<?php

    Drink::delete(Request::uri('drinks/', '?delete'));
    header('Location: /drinks');



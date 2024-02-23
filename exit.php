<?php

if (isset($_COOKIE["PHPSESSID"])) {
    session_destroy();


    echo "session has been destroy";
}


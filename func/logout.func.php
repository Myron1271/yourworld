<?php

    session_start();
    session_destroy();
    header("Location: http://localhost/yourworld/teacherlogin.php");
    exit;


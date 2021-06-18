<?php

    session_start();
    session_destroy();
    header("Location: /teacherlogin.php");
    exit;


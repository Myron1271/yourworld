<?php

    $time = date("H");
    $timezone = date("CET");
    if ($time < "12") {
        $welcome = "Goedemorgen!";
    } else
        if ($time >= "12" && $time < "17") {
            $welcome = "Fijne Middag!";
        } else
            if ($time >= "17" && $time < "23") {
                $welcome = "Een hele goedenavond!";
            } else
                if ($time >= "23") {
                    $welcome = "Fijne nacht toegewenst!";
                }

?>
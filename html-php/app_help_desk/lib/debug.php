<?php

// Decorarar uma função com o echo
function pre_decorator($func) {
    echo "<pre>";
    $func();
    echo "</pre>";
}
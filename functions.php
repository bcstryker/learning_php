<?php

function menuButtonStyle($option, $mobile = false) {
    global $uri;
    $pre = $uri === $option ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white";
    if ($mobile) {$pre .= " block";}
    return $pre . " rounded-md px-3 py-2 text-sm font-medium";
}
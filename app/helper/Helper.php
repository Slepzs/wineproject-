<?php

/* Makes Sessions Messages easier to implement */
function session_messages(string $message, string $class) {
    Session::flash('flash_message', $message);
    Session::flash('flash_type', $class);
}

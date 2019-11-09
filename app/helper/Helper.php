<?php

/* Makes Sessions Messages easier to implement */
function session_messages($message, string $class) {
    Session::flash('flash_message', $message);
    Session::flash('flash_type', $class);
}



function nickname() {
    if(Auth::user()->nickname) {
        return Auth::user()->nickname;
    } else {
        return Auth::user()->name;
    }

}

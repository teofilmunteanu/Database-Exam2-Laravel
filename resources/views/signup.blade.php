<?php

if (Session::has('email')){
    return redirect()->route('main');
}


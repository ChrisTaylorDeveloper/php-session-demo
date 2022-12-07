<?php

/**
* Plugin Name:       PHP Session demo
* Version:           2.0
* Author:            Chris Taylor
*/

if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}

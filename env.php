<?php

//điều chỉnh kết nối db ở đây
const DBNAME = "we17316";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost/we17316_php2/we17316_PHP2/ASM_PHP2/";
function route($nameRouter)
{
    return BASE_URL . $nameRouter;
}

function redirect($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors'   :
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . "?msg=" . $key);
    die;
}
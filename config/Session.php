<?php

namespace Config;
class Session {
    public static function start() {
        // Start the session
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function destroy() {
        if (session_status() != PHP_SESSION_NONE) {
            session_destroy();
        }
    }
    public static function regenerate() {
        if (session_status() != PHP_SESSION_NONE) {
            session_regenerate_id(true);
        }
    }
    public static function isLoggedIn() {
        return isset($_SESSION['user']);
    }
    public static function getUser() {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

}
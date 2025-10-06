<?php

class P48_UserLogin {
    public function main(): void {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        if ($username === 'admin' && $password === 'secret') {
            $_SESSION['loggedin'] = true;
            echo "Welcome, admin";
        } else {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
        }
    }
}

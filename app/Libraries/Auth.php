<?php

class Auth extends CI_Filter
{
    public function before($uri = '')
    {
        // Check if user is logged in and has admin role
        if (!$this->isLoggedIn() || !$this->isAdmin()) {
            redirect()->to('/admin/login');
        }
    }

    private function isLoggedIn(): bool
    {
        $session = session();
        return $session->has('admin_id');
    }

    private function isAdmin(): bool
    {
        $session = session();
        return (bool) $session->get('admin_role');
    }
}

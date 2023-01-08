<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('profile');
//        $session = session();
//        echo "Welcome, ".$session->get('name') . ", are you ready to work?";
    }
}
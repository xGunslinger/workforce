<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class ProfileController extends Controller
{
    public function index()
    {
        helper(['form']);
 $session = session();
        // connect to database to read the data from the user table
        $database = Database::connect();
        // $query = $database->query('SELECT name, position FROM users WHERE id');
        // $query= $database->select('*')->from('users')->where('id', $session->id);
        $sql = 'SELECT * FROM users WHERE id=?';
        $query = $database->query($sql, [$session->get('id')]);
        $row = $query->getRow();

        // get it and pass to view page
        $userdata["row"] = $row;
        echo view('/profile', $userdata);
    }
}
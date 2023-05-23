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
        $sql = 'SELECT * FROM users WHERE id=?';
        $query = $database->query($sql, [$session->get('id')]);
        $row = $query->getRow();

        // get it and pass to view page
        $userdata["row"] = $row;
        echo view('/profile', $userdata);
    }
    public function online(){

        $session = session();
        $database = Database::connect();
        $curr=date('H:i:s',time());
        $sql = 'UPDATE users SET status = ?, start_at=? WHERE id=?';
        $database->query($sql, ['Online', $curr, $session->get('id')]);
        return redirect()->to('/profile');
    }
    public function break(){
        $session = session();
        $database = Database::connect();
        $sql = 'UPDATE users SET status = ? WHERE id=?';
        $database->query($sql, ['Break',$session->get('id')]);
        return redirect()->to('/profile');
    }
    public function offline(){
        $session = session();
        $database = Database::connect();
        $curr=date('H:i:s',time());
        $sql = 'UPDATE users SET status =?, end_at=? WHERE id=?';
        $database->query($sql, ['Offline',$curr, $session->get('id')]);
        return redirect()->to('/profile');
    }
}
<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class NotificationController extends Controller{

    public function index(){
        helper(['form']);
        $session = session();
        $database = Database::connect();
        $sql = 'SELECT * FROM requests WHERE user_id=? AND status!=?';
        $query = $database->query($sql, [$session->get('id'), 'checking']);
        $row = $query->getResult();
        $notice["notice"] = $row;
        echo view('/notification', $notice);
    }
}
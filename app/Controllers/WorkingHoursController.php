<?php
namespace App\Controllers;
use App\Models\WorkingHoursModel;
use CodeIgniter\Controller;
use Config\Database;

class WorkingHoursController extends Controller{

    public function index(){
        helper(['form']);
        $session = session();
        $database = Database::connect();

        // show username
        $sql = 'SELECT * FROM users WHERE id=?';
        $query = $database->query($sql, [$session->get('id')]);
        $row = $query->getRow();

        // get it and pass to view page
        $userdata["row"] = $row;
        echo view('/working_hours', $userdata);

    }
}
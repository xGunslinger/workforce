<?php
namespace App\Controllers;
use App\Models\UserModel;
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

        $sql = 'SELECT start_at, working_hours FROM users WHERE id=?';
        $query = $database->query($sql, $session->get('id'));
        $row = $query->getResult();

        // get start_time as string
        $start = $row[0]->start_at;

        // transform variables to time format and count the difference
        $difference = strtotime($curr)-strtotime($start);

        // get working_hours as string
        $working_hours = $row[0]->working_hours;

        // transform variables to time format and sum
        $total_hours = $difference + strtotime($working_hours);
        $total_hours= date('H:i:s', $total_hours);

        // pass total hours into the db
        $sql = 'UPDATE users SET working_hours=? WHERE id=?';
        $database->query($sql, [$total_hours,$session->get('id')]);

        return redirect()->to('/profile');
    }
}
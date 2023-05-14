<?php
namespace App\Controllers;
use App\Models\RequestModel;
use CodeIgniter\Controller;
use Config\Database;

class RequestController extends Controller
{
    public function index()
    {
        helper(['form']);
        $session = session();
        // connect to database to read the data from the requests table
        $database = Database::connect();

        // get all new requests
        $sql = 'SELECT * FROM requests WHERE employee_email=? AND status=?';
        $query = $database->query($sql, [$session->get('email'), 'checking']);
        $row = $query->getResult();

        // get it and pass to view page
        $request["rows"] = $row;

        // show checked requests
        $sql = 'SELECT * FROM requests WHERE employee_email=? AND status!=?';
        $query = $database->query($sql, [$session->get('email'), 'checking']);
        $checked = $query->getResult();
        $request["checked"] = $checked;

        echo view('/request', $request);
    }

    public function request()
    {
        helper(['form']);
        $rules = [
            'employee_email' => 'required|min_length[2]|max_length[30]',
            'title' => 'required|min_length[2]|max_length[30]',
            'description' => 'required|min_length[4]|max_length[100]',
        ];
        if ($this->validate($rules)) {
            $session = session();
            $requestModel = new RequestModel();
            $data = [
                'user_id' => $session->get('id'),
                'sender_name' => $session->get('name'),
                'sender_surname' => $session->get('surname'),
                'employee_email' => $this->request->getVar('employee_email'),
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description')
            ];
            $requestModel->save($data);
            return redirect()->to('/profile');
        } else {
            $data['validation'] = $this->validator;
            echo view('request', $data);
        }
    }

    public function acceptRequest()
    {
       $id = $this->request->getVar('id');
        $database = Database::connect();
        $sql = 'UPDATE requests SET status = ?, updated_at = Now() WHERE id=?';
        $database->query($sql, ['accepted', $id]);
        return redirect()->to('/request');
    }
    public function refuseRequest()
    {
        $id = $this->request->getVar('id');
        $database = Database::connect();
        $sql = 'UPDATE requests SET status = ?, updated_at = Now() WHERE id=?';
        $database->query($sql, ['refused', $id]);
        return redirect()->to('/request');
    }
}
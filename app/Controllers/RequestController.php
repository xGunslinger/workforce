<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RequestModel;
use Config\Database;

class RequestController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('request');
    }

    public function request()
    {
        helper(['form']);
        $session = session();
//        $data = [
//            'supervisor' => $this->input->post('supervisor'),
//            'title' => $this->input->post('title'),
//            'description' => $this->input->post('description'),
//        ];
        $rules = [
            'supervisor' => 'required|min_length[2]|max_length[30]',
            'title' => 'required|min_length[2]|max_length[30]',
            'description' => 'required|min_length[4]|max_length[100]',
        ];
        if ($this->validate($rules)) {
            $requestModel = new RequestModel();
            $data = [
                'user_id' => $session->get('id'),
                'employee_email' => $this->request->getVar('supervisor'),
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),

            ];
            $requestModel->save($data);
            return redirect()->to('/profile');
        }else{
            $data['validation'] = $this->validator;
            echo view('request', $data); }

//            $data = [
//                'supervisor' => $this->input->post('supervisor'),
//                'title' => $this->input->post('title'),
//                'description' => $this->input->post('description')
//            ];
//            $session->set($data);
//            $database = Database::connect();
//            $sql = 'UPDATE requests SET supervisor = ?, title = ?, description = ? WHERE id=?';
//            $database->query($sql, ['Online', $session->get('id')]);
//            $title = $data['title'];
//            $supervisor = $data['supervisor'];
//            echo "Your request " . $title . "has been sent to " . $supervisor;
//        } else {
//            $session->setFlashdata('msg', 'Choose your supervisor.');
//            return redirect()->to('/request');
//        }
    }

}

<?php
namespace App\Controllers;
use App\Models\RequestModel;
use CodeIgniter\Controller;

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
}
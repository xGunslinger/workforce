<?php
namespace App\Controllers;
use CodeIgniter\Controller;


class ScheduleController extends Controller{
    public function index(){
        echo view('schedule');
    }
}

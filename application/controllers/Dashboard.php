<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('v-dashboard');
        $this->load->view('layout/v-footer');
    }
}

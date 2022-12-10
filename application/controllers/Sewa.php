<?php

class Sewa extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('sewa/v-index');
        $this->load->view('layout/v-footer');
    }
    public function create()
    {
        $this->load->view('layout/v-header');
        $this->load->view('sewa/v-create');
        $this->load->view('layout/v-footer');
    }
    public function update()
    {
        $this->load->view('layout/v-header');
        $this->load->view('sewa/v-update');
        $this->load->view('layout/v-footer');
    }
}

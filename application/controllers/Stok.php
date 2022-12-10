<?php

class Stok extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('stok/v-index');
        $this->load->view('layout/v-footer');
    }
    public function create()
    {
        $this->load->view('layout/v-header');
        $this->load->view('stok/v-create');
        $this->load->view('layout/v-footer');
    }
    public function update()
    {
        $this->load->view('layout/v-header');
        $this->load->view('stok/v-update');
        $this->load->view('layout/v-footer');
    }
}

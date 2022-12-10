<?php

class Artikel extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('artikel/v-index');
        $this->load->view('layout/v-footer');
    }
    public function create()
    {
        $this->load->view('layout/v-header');
        $this->load->view('artikel/v-create');
        $this->load->view('layout/v-footer');
    }
    public function update()
    {
        $this->load->view('layout/v-header');
        $this->load->view('artikel/v-update');
        $this->load->view('layout/v-footer');
    }
}

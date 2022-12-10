<?php

class test extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('test');
        $this->load->view('layout/v-footer');
    }
}

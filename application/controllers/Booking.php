<?php

class Booking extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/v-header');
        $this->load->view('booking/v-index');
        $this->load->view('layout/v-footer');
    }
    public function create()
    {
        $this->load->view('layout/v-header');
        $this->load->view('booking/v-create');
        $this->load->view('layout/v-footer');
    }
    public function update()
    {
        $this->load->view('layout/v-header');
        $this->load->view('booking/v-update');
        $this->load->view('layout/v-footer');
    }
}

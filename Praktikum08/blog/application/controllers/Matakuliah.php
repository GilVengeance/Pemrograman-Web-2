<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{


    // Fungsi : Menampilkan seluruh data
    public function index()
    {
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'mk1');

        // Pakai class model
        $this->mk1->nama = "Pemrograman Web";
        $this->mk1->sks = "3";
        $this->mk1->kode = "001";

        // Buat objek 2
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'mk2');

        // Pakai class model
        $this->mk2->nama = "Bahasa Ingrris";
        $this->mk2->sks = "2";
        $this->mk2->kode = "002";

        // Buat objek 3
        // Load model + bikin objek
        $this->load->model('matakuliah_model', 'mk3');

        // Pakai class model
        $this->mk3->nama = "PKN";
        $this->mk3->sks = "2";
        $this->mk3->kode = "003";

        // Simpan objek kedalam array
        $list_mk = [$this->mk1, $this->mk2, $this->mk3];

        // Siapin data untuk dikirim ke view
        $data["list_mk"] = $list_mk;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');
    }
}
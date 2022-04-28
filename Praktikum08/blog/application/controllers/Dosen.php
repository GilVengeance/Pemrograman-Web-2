<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{


    // Fungsi : Menampilkan seluruh data
    public function index()
    {
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn1');

        // Pakai class model
        $this->dsn1->id = 1;
        $this->dsn1->nidn = "010001";
        $this->dsn1->nama = "Sirojul Munir";
        $this->dsn1->gender = "L";
        $this->dsn1->pendidikan = "Pemrograman Web";

        // Buat objek 2
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn2');

        // Pakai class model
        $this->dsn2->id = 2;
        $this->dsn2->nidn = "020001";
        $this->dsn2->nama = "Miss Chintya";
        $this->dsn2->gender = "P";
        $this->dsn2->pendidikan = "Bahasa Inggris";

        // Buat objek 3
        // Load model + bikin objek
        $this->load->model('dosen_model', 'dsn3');

        // Pakai class model
        $this->dsn3->id = 3;
        $this->dsn3->nidn = "030001";
        $this->dsn3->nama = "Rusmanto";
        $this->dsn3->gender = "L";
        $this->dsn3->pendidikan = "PKN";

        // Simpan objek kedalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

        // Siapin data untuk dikirim ke view
        $data["list_dsn"] = $list_dsn;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }
}
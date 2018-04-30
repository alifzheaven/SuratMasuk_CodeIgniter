<?php
     class Siswa extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $data["query"]= NULL;
               $data["content"]= "pages/siswa_form";
               $this->load->view("template", $data);
          }

          function hapus($id){
               $this->db->where(array('siswa_id' => $id))->delete('siswa');
               redirect ('siswa', 'refresh');

          }

          function edit($id){
               $siswa = $this->db->get_where("siswa",array('siswa_id' => $id));

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_edit";
               $this->load->view("template", $data);
          }

          function update($id){
               $data = array              
                    (
                         'no' => $this->input->post('no'),
                         'tanggal_surat' => $this->input->post('tanggal_surat'),
                         'nomor_surat' => $this->input->post('nomor_surat'),
                         'Uraian' => $this->input->post('uraian'),
                         'Asal_surat' => $this->input->post('asal_surat')
                    );

               
               $this->db->where(array('siswa_id'=>$id))->update('siswa',$data);
               redirect ('siswa', 'refresh');

          }

          function simpan(){
               $data = array              
                    (
                         'no' => $this->input->post('no'),
                         'tanggal_surat' => $this->input->post('tanggal_surat'),
                         'nomor_surat' => $this->input->post('nomor_surat'),
                         'Uraian' => $this->input->post('uraian'),
                         'Asal_surat' => $this->input->post('asal_surat')
                    );

               
               $this->db->insert('siswa' , $data);
               redirect ('siswa', 'refresh');



          }
     }
?>

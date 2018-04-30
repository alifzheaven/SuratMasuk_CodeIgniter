<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Data Surat Masuk</div>
     <div class="card-body">
          <?php
               
               echo anchor('siswa/tambah','Tambah Surat','class="btn btn-primary"
               style="margin:0 5px; margin-bottom: 15px;" ');
               echo anchor ('siswa/laporan','Cetak Laporan','class="btn btn-secondary" style="margin: 0 5px; margin-bottom: 15px;"');
               ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">No</th>
                         <th scope="col">TANGGAL_SURAT</th>
                         <th scope="col">NOMOR_SURAT</th>
                         <th scope="col">URAIAN</th>
                         <th scope="col">ASAL_SURAT</th>
                         <th scope="col">AKSI</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              $no = 1;
                              foreach ($query->result() as $row) {
                                   echo '
                                        <tr>
                                             <td>'.$no++.'</td>
                                             <td>'.$row->tanggal_surat.'</td>
                                             <td>'.$row->nomor_surat.'</td>
                                             <td>'.$row->uraian.'</td>
                                             <td>'.$row->asal_surat.'</td>
                                             <td>
                                                  '.anchor('siswa/edit/'.$row->siswa_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                                  '.anchor('siswa/hapus/'.$row->siswa_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>
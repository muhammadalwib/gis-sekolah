
<!-- Advanced Tables -->
   <div class="panel panel-default">
       <?php
        if ($this->session->flashdata('pesan')) {
                            echo ' <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
       ?>
                        <div class="panel-heading">
                             Data Sekolah
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama Sekolah</th>
                                             <th>Alamat</th>
                                             <th>No Telpon</th>
                                             <th>Latitude</th>
                                             <th>Longitude</th>
                                             <th>Kondisi Sekolah</th>
                                             <th>Luas Bangunan</th>
                                             <th>Jumlah Siswa</th>
                                             <th>Keterangan</th>
                                        </tr>
                                    </thead>   
                                    </tbody>
                                        <?php $no=1; foreach ($sekolah as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value->nama_sekolah ?></td>
                                                <td><?= $value->alamat ?></td>
                                                <td><?= $value->no_telpon ?></td>
                                                <td><?= $value->latitude ?></td>
                                                <td><?= $value->longitude ?></td>
                                                <td><?= $value->kondisi_sekolah ?></td>
                                                <td><?= $value->luas_bangunan ?></td>
                                                <td><?= $value->jumlah_siswa ?></td>
                                                <td><?= $value->keterangan ?></td>
                                                <td>
                                                    <a href="<?= base_url('sekolah/edit/'.$value->id_sekolah) ?>" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="<?= base_url('sekolah/hapus/'.$value->id_sekolah)?>" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Data Ingin Dihapus?..')">Delete</a>
                                                </td>
                                                
                                            </tr>
                                       <?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    </div>
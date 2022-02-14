<div class="row">
     <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">List Sekolah</div>
            <div class="panel-body">
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
                                                
                                                
                                            </tr>
                                       <?php } ?>
                                </table>
            </div>

        </div>

    </div>

</div>


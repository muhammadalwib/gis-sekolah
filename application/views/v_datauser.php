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
                                             <th>Nama User</th>
                                             <th>Username</th>
                                             <th>Password</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>   
                                    </tbody>
                                        <?php $no=1; foreach ($user as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value->nama_user ?></td>
                                                <td><?= $value->username?></td>
                                                <td><?= $value->password ?></td>
                                                
                                                <td>
                                                    <a href="<?= base_url('user/input/'.$value->id_user) ?>" class="btn btn-sm btn-success">Tambah</a>
                                                    <a href="<?= base_url('user/edit/'.$value->id_user) ?>" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="<?= base_url('user/hapus/'.$value->id_user)?>" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Data Ingin Dihapus?..')">Delete</a>
                                                </td>
                                                
                                            </tr>
                                       <?php } ?>
                                </table>
<div class="col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Sekolah
                        </div>
                        <div class="panel-body">
                            <?php 
                            echo validation_errors(' <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ','</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo validation_errors(' <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
                            echo form_open('user/edit/'.$user->id_user);  
                            ?>

<div class="form-group">
    <label>Nama User</label>
     <input name="nama_user" placeholder="Nama User" value="<?= $user->nama_user ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>username</label>
     <input name="username" placeholder="Username" value="<?= $user->username ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Password</label>
     <input name="password" placeholder="Password" value="<?= $user->password?>" class="form-control" />
 </div>

 
 <div class="form-group">
    <label></label>
    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    <button type="reset" class="btn btn-sm btn-success">Reset</button>

</div>
 
 <?php echo  form_close();?>
                            
                                              
            </div>
        </div>
    </div>
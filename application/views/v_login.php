<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>template/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>template/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>template/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Login
                        </div>
                        <div class="panel-body">
                            <?php 
                            echo validation_errors(' <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        ','</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo  '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
                            echo form_open('login');  
                            ?>

 <div class="form-group">
    <label>Username</label>
     <input name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control" />
 </div>

 

 <div class="form-group">
    <label>Password</label>
     <input name="password" placeholder="Password" value="<?= set_value('password') ?>" class="form-control" />
 </div>


 <div class="form-group">
    <label></label>
    <button type="submit" class="btn btn-sm btn-primary">Login</button>
 

</div>
 
 <?php echo  form_close();?>
                            
                                              
            </div>
        </div>
    </div>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
   
</body>
</html>


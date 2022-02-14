<div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Map
                        </div>
                        <div class="panel-body">
                     
<div id="mapid" style="height: 400px;"></div>
<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[0.5082185,101.4416803];	
}

var mymap = L.map('mapid').setView([0.5082185,101.4416803], 12);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	mymap.panTo(position);
});
mymap.addLayer(marker);

</script>
                           </div>
                    </div>
                </div>


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
                            echo  '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }
                            echo form_open('sekolah/input');  
                            ?>

<div class="form-group">
    <label>Nama Sekolah</label>
     <input name="nama_sekolah" placeholder="Nama Sekolah" value="<?= set_value('nama_sekolah') ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Alamat Sekolah</label>
     <input name="alamat" placeholder="Alamat Sekolah" value="<?= set_value('alamat') ?>" class="form-control" />
 </div>

 

 <div class="form-group">
    <label>No Telpon</label>
     <input name="no_telpon" placeholder="No Telpon" value="<?= set_value('no_telpon') ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Latitude</label>
     <input id="Latitude" name="latitude" placeholder="Latitude" value="<?= set_value('latitude') ?>" class="form-control" readonly />
 </div>

 <div class="form-group">
    <label>Longitude</label>
     <input id="Longitude" name="longitude" placeholder="Longitude" value="<?= set_value('longitude') ?>" class="form-control" readonly/>
 </div>

 <div class="form-group">
    <label>Kondisi Sekolah</label>
     <input name="kondisi_sekolah" placeholder="Kondisi Sekolah" value="<?= set_value('kondisi_sekolah') ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Luas Bangunan</label>
     <input name="luas_bangunan" placeholder="Luas Bangunan" value="<?= set_value('luas_bangunan') ?>" class="form-control" />
 </div>

 <div class="form-group">
    <label>Jumlah Siswa</label>
     <input name="jumlah_siswa" placeholder="Jumlah Siswa" value="<?= set_value('jumlah_siswa') ?>" class="form-control" />
 </div>
 
 <div class="form-group">
    <label>Keterangan</label>
     <input name="keterangan" placeholder="Keterangan" value="<?= set_value('keterangan') ?>" class="form-control" />
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
</div>






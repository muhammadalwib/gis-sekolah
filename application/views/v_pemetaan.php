<div id="mapid" style="height: 400px;"></div>

<script>
var mymap = L.map('mapid').setView([0.5082185,101.4416803], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
<?php foreach ($sekolah as $key => $value) { ?>
    L.marker([<?= $value->latitude ?>,<?= $value->longitude ?>]).addTo(mymap).
    bindPopup("<b>Nama Sekolah :<?= $value->nama_sekolah ?></b><br>"+
    "Alamat : <?= $value->alamat ?></br>"+
    "No telpon : <?= $value->no_telpon ?></br>"+
    "Kondisi Sekolah : <?= $value->kondisi_sekolah ?></br>"+
    "Luas Bangunan : <?= $value->luas_bangunan ?></br>"+
    "Jumlah Siswa : <?= $value->jumlah_siswa ?></br>"+
    "Keterangan : <?= $value->keterangan ?></br>");
    
<?php }?>
 

</script>
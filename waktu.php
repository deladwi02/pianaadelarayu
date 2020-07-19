<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
-->
</style>
<div class="bg-info">
<p align="center">
<script type="text/javascript">
// mulai...........
var waktu=new Date()
var tahun=waktu.getFullYear()
var hari=waktu.getDay()
var bulan=waktu.getMonth()
var tanggal=waktu.getDate()
if (tanggal < 7) {tanggal="0"+tanggal}
var hariarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu")
var bulanarray=new Array("Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember")
document.write(hariarray[hari]+", "+tanggal+" "+bulanarray[bulan]+" "+tahun)
</script></p></div>
<?php
include "config/koneksi.php";

//input data Pegawai
if(isset($_POST['insert_tiket']))
{
	$id_tiket			= $_POST['id_tiket'];
	$tgl_pertandingan	= $_POST['tgl_pertandingan'];
	$tgl_setelah_pertandingan	= $_POST['tgl_setelah_pertandingan'];
	$jam_pertandingan	= $_POST['jam_pertandingan'];
	$tim_tuanrumah		= $_POST['tim_tuanrumah'];
	$logo_tuanrumah		= $_FILES['logo_tuanrumah']['name'];
	$folder				= "images/tiket/";
	$tim_tamu			= $_POST['tim_tamu'];
	$status_kuota			= $_POST['status_kuota'];
	$folder				= "images/tiket/";
	$lokasi_pertandingan	= $_POST['lokasi_pertandingan'];
	
	if(move_uploaded_file($_FILES['logo_tuanrumah']['tmp_name'], $folder.$logo_tuanrumah))
	{	
	$query = mysqli_query($connect, "INSERT INTO `tb_paket_gunung` (`id_gunung`, `id_pegawai`, `nama_paket`, `harga`, `status_kuota`, `tgl_awal`, `tgl_akhir`, `gambar_gunung`, `informasi_gunung`, `include`) values('$id_tiket', 'P001','$jam_pertandingan','$tim_tuanrumah','$status_kuota','$tgl_pertandingan','$tgl_setelah_pertandingan','$logo_tuanrumah','$tim_tamu','$include')");
	header('location:data_paket_gunung.php');
	}

}




 // update data Pegawai
	if(isset($_POST['update_tiket']))
	{
	$id_tiket			= $_POST['id_tiket'];
	$tgl_pertandingan	= $_POST['tgl_pertandingan'];
	$jam_pertandingan	= $_POST['jam_pertandingan'];
	$tim_tuanrumah		= $_POST['tim_tuanrumah'];
	$tgl_awal		= $_POST['tgl_awal'];
	$tgl_akhir		= $_POST['tgl_akhir'];
	$logo_tuanrumah		= $_FILES['logo_tuanrumah']['name'];
	$folder				= "images/tiket/";
	$folder				= "images/tiket/";
	$lokasi_pertandingan	= $_POST['lokasi_pertandingan'];
	$include	= $_POST['include'];
	$harga	= $_POST['harga'];
		
		if($logo_tuanrumah =='')
		{
		$query = mysqli_query($connect,"update tb_paket_gunung set tb_paket_gunung='$tb_tiket' where id_gunung='$id_tiket'");
		header('location:data_paket_gunung.php');
		}
		else if(move_uploaded_file($_FILES['logo_tuanrumah']['tmp_name'],$folder.$logo_tuanrumah))
		{

		$query = mysqli_query($connect,"update tb_paket_gunung set id_gunung='$id_tiket', nama_paket='$tgl_pertandingan', status_kuota='$jam_pertandingan', harga='$harga', gambar_gunung='$logo_tuanrumah', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir', informasi_gunung='$lokasi_pertandingan', include='$include' where id_gunung='$id_tiket'");
		header('location:data_paket_gunung.php');
		
	}
}
	

 ?>

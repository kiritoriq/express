<?php
//ini adalah file API Services (Representasi Data) untuk mengambil data dari database.
	include "config/config.php";
		$noresi = $_GET['noresi'];
		$query = mysqli_query($con, "SELECT a.*, b.namaprov AS provpengirim, c.namakota AS kotapengirim, d.namaprov AS provpenerima, e.namakota AS kotapenerima FROM ((((tr_pengiriman a JOIN provinces b ON a.provpengirim = b.id) JOIN regencies c ON a.kotapengirim = c.id) JOIN provinces d ON a.provpenerima = d.id) JOIN regencies e ON a.kotapenerima = e.id) WHERE noresi = '".$noresi."'");
		$cek = mysqli_num_rows($query);
		if($cek > 0) {
			while($data = mysqli_fetch_array($query)){
				$item[] = array(
					"id" => $data['id'],
					"noresi" => $data['noresi'],
					"tgl_kirim" => $data['tgl_kirim'],
					"jam_kirim" => $data['jam_kirim'],
					"tujuan" => $data['tujuan'],
					"berat" => $data['berat'],
					"biaya" => $data['biaya'],
					"namapengirim" => $data['namapengirim'],
					"alamatpengirim" => $data['alamatpengirim'],
					"kotapengirim" => $data['kotapengirim'],
					"kodepospengirim" => $data['kodepospengirim'],
					"provpengirim" => $data['provpengirim'],
					"telppengirim" => $data['telppengirim'],
					"deskripsipengirim" => $data['deskripsipengirim'],
					"isbahaya" => $data['isbahaya'],
					"ketpengirim" => $data['ketpengirim'],
					"namapenerima" => $data['namapenerima'],
					"alamatpenerima" => $data['alamatpenerima'],
					"kotapenerima" => $data['kotapenerima'],
					"kodepospenerima" => $data['kodepospenerima'],
					"provpenerima" => $data['provpenerima'],
					"telppenerima" => $data['telppenerima'],
					"deskripsibarang" => $data['deskripsibarang'],
					"sts_kirim" => $data['sts_kirim'],
					"created_at" => $data['created_at'],
					"updated_at" => $data['updated_at']
				);
			}
			$json = array(
				'status' => '200',
				'message' => 'Success, Data Ditemukan!',
				'data' => $item
			);
		} else {
			$item = array();
			$json = array(
				'status' => '500',
				'message' => 'Error, Data Tidak Ditemukan!',
				'data' => $item
			);
		}


	echo json_encode($json);
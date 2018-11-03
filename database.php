<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "ta9";
	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		
		
	}

	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT * FROM tabel_user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		mysqli_query($this->conn,"INSERT INTO tabel_user VALUES ('','$nama','$alamat','$usia')");
	}

	function hapus($id){
		mysqli_query($this->conn,"DELETE FROM tabel_user WHERE id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn,"SELECT * FROM tabel_user WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		mysqli_query($this->conn,"UPDATE tabel_user SET nama='$nama',alamat='$alamat',usia='$usia' WHERE id='$id'");
	}

} 

?>
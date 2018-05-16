<?php
include'../config/controller.php';
include'../sweetalert/sweetalert.php';
$query= new Database();

$aksi=$_GET['aksi'];


// ================== root CREATE
if($aksi=='input_berita')
{
			$folder    ="images/berita/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
			$var= $query->input_berita(
			$_POST['judul'],
			$nama_file,
			$_POST['editor1'],
			$_POST['kategori']
			);
				if($var)
				{
					$_SESSION['berita']='Tambah';
					header('location:../');
				}			
				else
				{
				echo '<script>swal("Gagal","Data Gagal di Input!","error")</script>';
				header('location:../');
				}
			}
}

if($aksi=='input_produk')
{
			$folder    ="images/produk/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
		$var=$query->input_produk(
			$_POST['nama'],
			$nama_file,
			$_POST['editor2']
			);
			
			if($var){
				$_SESSION['input_produk']='Tambah';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Input!","error")</script>';
				header('location:../');
			}
		}
}

if($aksi=='input_admin')
{
		$var=$query->input_admin(
			$_POST['nama'],
			$_POST['username'],
			$password=md5(123456)
			);

		if($var){
			$_SESSION['admin']='active';
			header('location:../');
		}else{
			echo '<script>swal("Ops..","Data Gagal di Input!","success")</script>';
			header('location:../');
		}
}

if($aksi=='input_video')
{
		$var=$query->input_video(
			$_POST['judul'],
			$_POST['video']
			);

		if($var){
			$_SESSION['video']='Tambah';
			header('location:../');
		}else{
			echo '<script>swal("Ops..","Data Gagal di Input!","success")</script>';
			header('location:../');
		}
}

if($aksi=='input_sosmed')
{
			$folder    ="images/sosmed/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
		$var=$query->input_sosmed(
			$_POST['link'],
			$nama_file
			);
			
			if($var){
				$_SESSION['sosmed']='Tambah';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Input!","error")</script>';
				header('location:../');
			}
		}
}

// ================== root UPDATE
if($aksi=='update_admin')
{
		$var=$query->update_admin(
			$_POST['id'],
			$_POST['nama'],
			$_POST['username']
			);

			if($var){
				$_SESSION['input_admin']='active';
				$a=$_SESSION['input_admin'];
				//var_dump($a);
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
}

if($aksi=='edit_admin')
	{
		$_SESSION['id_admin']=$_GET['id'];
		$_SESSION['edit_admin']='active';		
		//var_dump($id);exit();
		
				header('location:../');
			
	}

if($aksi=='edit_berita')
	{
		$_SESSION['id_berita']=$_GET['id'];
		$_SESSION['edit_berita']='active';		
		//var_dump($id);exit();
		
				header('location:../');
			
	}

if($aksi=='edit_produk')
	{
		$_SESSION['id_produk']=$_GET['id'];
		$_SESSION['edit_produk']='active';		
		//var_dump($id);exit();
		
				header('location:../');
			
	}

if($aksi=='edit_sosmed')
	{
		$_SESSION['id_sosmed']=$_GET['id'];
		$_SESSION['edit_sosmed']='active';		
		//var_dump($id);exit();
		
				header('location:../');
			
	}

if($aksi=='update_pimpinan')
{
			$folder    ="images/pimpinan/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
			$var=$query->update_pimpinan(
				$_POST['id'],
				$_POST['title'],
				$_POST['nama'],
				$nama_file,
				$_POST['editor']
				);

			if($var){
					
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
			}
			else
			{
			$var=$query->update_pimpinan_foto(
				$_POST['id'],
				$_POST['title'],
				$_POST['nama'],
				$_POST['editor']
				);

			if($var){
				$_SESSION['update_pimpinan']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
				
			}
}

if($aksi=='update_produk')
{
			$folder    ="images/produk/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
			$var=$query->update_produk(
				$_POST['id'],
				$_POST['nama'],
				$nama_file,
				$_POST['editor3']
				);

			if($var){
				$_SESSION['input_produk']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
			}
			else
			{
			$var=$query->update_produk_foto(
				$_POST['id'],
				$_POST['nama'],
				$_POST['editor3']
				);

			if($var){
				$_SESSION['input_produk']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
				
			}
}

if($aksi=='update_sosmed')
{
			$folder    ="images/sosmed/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
			$var=$query->update_sosmed(
				$_POST['id'],
				$_POST['link'],
				$nama_file
				);

			if($var){
				$_SESSION['sosmed']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
			}
			else
			{
			$var=$query->update_sosmed_foto(
				$_POST['id'],
				$_POST['link']
				);

			if($var){
				$_SESSION['sosmed']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
				
			}
}

if($aksi=='update_berita')
{
			$folder    ="images/berita/";
			$nama_file = $folder.basename($_FILES['photo']['name']);
			$upload =move_uploaded_file($_FILES['photo']['tmp_name'], $nama_file);
			if($upload)
			{
			$var=$query->update_berita(
				$_POST['id'],
				$_POST['judul'],
				$nama_file,
				$_POST['editor4'],
				$_POST['kategori']
				);

			if($var){
				$_SESSION['berita']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
			}
			else
			{
			$var=$query->update_berita_foto(
				$_POST['id'],
				$_POST['judul'],
				$_POST['editor4'],
				$_POST['kategori']
				);

			if($var){
				$_SESSION['berita']='Update';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
				
			}
}

if($aksi=='update_slider')
{
			$folder    ="images/slider/";
			$temp      =explode(".",$_FILES['photo']['name']);
			$id        =$_POST['id'];
			$rename    ="banner".$id.".".end($temp);
			$nama_file =$folder.basename($rename);
			$title	   = $_FILES['photo']['tmp_name'];
			$upload    =move_uploaded_file($title,$nama_file);
		if($upload)
		{
			$var=$query->update_slider(
			$id,
			$rename
			);
			if($var)
			{
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
			}

		}
		else
		{
			echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
			header('location:../');
		}
}

if($aksi=='update_kontak')
{
		$var=$query->update_kontak(
			$_POST['id'],
			$_POST['phone'],
			$_POST['fax'],
			$_POST['email']
			);

			if($var){
				$_SESSION['update_kontak']='active';
				header('location:../');
			}else{
				echo '<script>swal("Gagal","Data Gagal di Update!","error")</script>';
				header('location:../');
				}
}

if($aksi=='update_video')
{
		$var=$query->update_video(
			$_POST['id'],
			$_POST['judul']
			);

		if($var){
			$_SESSION['video']='Update';
			header('location:../');
		}else{
			echo '<script>swal("Ops..","Data Gagal di Input!","success")</script>';
			header('location:../');
		}
}

// ================== root DELETE
if($aksi=='delete_admin')
	{
		$var =$query->delete_admin(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['input_admin']='active';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

	if($aksi=='delete_produk')
	{
		$var =$query->delete_produk(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['input_produk']='Hapus';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

	if($aksi=='delete_berita')
	{
		$var =$query->delete_berita(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['berita']='Hapus';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

	if($aksi=='delete_pengaduan')
	{
		$var =$query->delete_pengaduan(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['pengaduan']='Hapus';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

	if($aksi=='delete_video')
	{
		$var =$query->delete_video(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['video']='Hapus';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

	if($aksi=='delete_sosmed')
	{
		$var =$query->delete_sosmed(
		$id  =$_GET['id']
		);
			if($var)
			{
				$_SESSION['sosmed']='Hapus';
				header('location:../');
			}
			else
			{
				echo '<script>swal("Gagal","Data Gagal di Hapus!","error")</script>';
				header('location:../');
			}	
	}

//================== root READ

if($aksi=='lihat_pengaduan')
	{
		$_SESSION['id_pengaduan']=$_GET['id'];
		$_SESSION['lihat_pengaduan']='active';
		//var_dump($id);exit();
		
				header('location:../');
			
	}
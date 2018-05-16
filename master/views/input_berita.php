<!--  -->
         <script>
            function viewBerita(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var previewBerita=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        previewBerita.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(previewBerita);

    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                       swal("Oops..!", "Tipe file tidak sesuai..!", "error");
                    }
                   
                }    
            }
        </script>
<!-- <div class="box box-info">
            <div class="box-header">
              
			<form method="post" id="form-user" enctype="multipart/form-data" >
					<div class="box-body">
					<div class="form-group">
					<h3 class="box-title">Judul Berita</h3>                  
					<input type="text" name="judul" required class="form-control">
					</div>
					
          <div class="form-group" >
          <h3 class="box-title">Pilih Gambar</h3>                  
          <input type="file" name="photo" required accept="image/*"  onchange="viewBerita(this,'preview')">
          <img id="preview" src="" alt="" width="320px"/>
          </div>
          </div>

					<div class="form-group" >
					<textarea name="editor" id="editor"></textarea>
          </div>

					<div class="box-body">
					<div class="form-group" >
					<button type="submit" class="btn btn-primary"> SIMPAN</button>
					</div>
					</div>
              </form>
            </div>
          </div>
 -->
<!--  <script type="text/javascript">
 	$(document).ready(function (a) {
 $("#form-user").on('submit',(function(a) {
  a.preventDefault();
  $.ajax({
   url: "root/proses.php?aksi=input", // proses upload gambar
   type: "POST", // metode untuk menjalankan form
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
 success: function(data){

    if(data=='invalid file'){
     // invalid file format.
     $("#pesan-error").html("Format gambar tidak valid").fadeIn();
    }else{
     // hasil upload gambar
     $("#hasil").html(data).fadeIn();
    }
      }         
    });
 }));
});
 </script> -->


 <div class="box box-info">
            <div class="box-header">
              
      <form action="root/proses.php?aksi=input_berita" method="post" id="form-user" enctype="multipart/form-data" >
          <div class="box-body">
          <div class="form-group">
          <h3 class="box-title">Judul Berita</h3>                  
          <input type="text" name="judul" required class="form-control">
          </div>
          
          <div class="form-group" >
          <h3 class="box-title">Pilih Foto</h3>  <h7>[ 730 x 490 ] </h7>                
          <input type="file" name="photo" required accept="image/*"  onchange="viewBerita(this,'previewBerita')">
          <img id="previewBerita" src="" alt="" width="320px"/>
          </div>
          <div class="form-group" >
          <h3 class="box-title">Kategori</h3>    
          <select name="kategori" class="form-control">
            <option>Pilih Kategori</option>
            <option value="umum">Umum</option>
            <option value="kegiatan">Kegiatan</option>
            <option value="lainnya">Lainnya</option>
          </select>              
          </div>
          </div>
 
          <div class="box-body pad">

          <textarea  name="editor1" class="ckeditor"></textarea>
            <script type="text/javascript">
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.add            
            </script>
          </div>

          <div class="box-body">
          <div class="form-group" >
          <button type="submit" class="btn btn-primary"> SIMPAN</button>
          </div>
          </div>
              </form>
            </div>
          </div>



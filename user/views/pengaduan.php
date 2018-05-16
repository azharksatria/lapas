   <div class="box box-info">
            <div class="box-header">
              
      <form action="../master/root/user_proses.php?aksi=pengaduan" method="post" id="form-user" enctype="multipart/form-data" >
          <div class="box-body">
          <div class="form-group">
          <h3 class="box-title">Perihal Pengaduan</h3>                  
          <input type="text" name="hal" required class="form-control">
          </div>
   <!--        
          <div class="form-group" >
          <h3 class="box-title">Pilih Foto</h3>                  
          <input type="file" name="photo" required accept="image/*"  onchange="tampilkanPreview(this,'preview')">
          <img id="preview" src="" alt="" width="320px"/>
          </div> -->
          </div>
 
          <div class="box-body pad">
          <h3 class="box-title">Keterangan</h3>                  
          <textarea  name="editor1" class="ckeditor"></textarea>
 
          </div>

          <div class="box-body">
          <div class="form-group" >
          <button type="submit" class="btn btn-primary"> KIRIM</button>
          </div>
          </div>
              </form>
            </div>
          </div>
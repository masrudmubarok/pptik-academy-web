 <div class="py-1">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <!-- <h3 class="display-3">Tambah Kursus</h3> -->
       </div>
     </div>
   </div>
 </div>
 <?php if ($this->session->flashdata('error_message')) { ?>
   <div class="py-1">
     <div class="container">
       <div class="alert alert-danger" role="alert">
         <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
         <p><?= $this->session->flashdata('error_message') ?></p>
       </div>
     </div>
   </div>
 <?php } ?>
 <div class="py-1">
   <div class="container">
     <div class="alert alert-primary" role="alert">
       <p><b>Informasi!</b> Field yang ditandai harus diisi dengan benar.</p>
     </div>
   </div>
 </div>
 <div class="py-4">
   <div class="container">
     <div class="row">
       <div class="col-md-7">
         <form id="c_form-h" method="post" action="<?= base_url('kursus/create'); ?>" enctype="multipart/form-data">
           <div class="form-group row">
             <label for="nama_kursus" class="col-4 col-form-label">Nama Kursus*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="nama_kursus">
             </div>
           </div>
           <div class="form-group row">
             <label for="deskripsi" class="col-4 col-form-label">Deskripsi*</label>
             <div class="col-9">
               <textarea name="deskripsi" class="form-control" rows="5" cols="40"></textarea>
             </div>
           </div>
           <div class="form-group row">
             <label for="nama_tutor" class="col-4 col-form-label">Nama Tutor*</label>
             <div class="col-9">
               <select name="id_tutor" class="custom-select">
                 <option selected value=""><b>Pilih :</b></option>
                 <?php
                  foreach ($ttrs_list as $ttr) {
                    echo "<option value='$ttr->id_tutor'>$ttr->nama_tutor</option>";
                  }
                  ?>
               </select>
             </div>
           </div>
           <div class="form-group row">
             <label for="harga" class="col-4 col-form-label">Harga*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="harga">
             </div>
           </div>
           <div class="form-group row">
             <label for="icon" class="col-4 col-form-label">Icon*</label>
             <div class="col-9">
               <input type="file" name="icon">
             </div>
           </div>
           <div class="form-group row">
             <label for="jumlah_video" class="col-4 col-form-label">Jumlah Video*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="jumlah_video">
             </div>
           </div>
           <div class="form-group row">
             <label for="jumlah_modul" class="col-4 col-form-label">Jumlah Modul*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="jumlah_modul">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul1" class="col-4 col-form-label">Judul 1*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul1">
             </div>
           </div>
           <div class="form-group row">
             <label for="video1" class="col-4 col-form-label">Video 1*</label>
             <div class="col-9">
               <input type="file" name="video1">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul1" class="col-4 col-form-label">Modul 1*</label>
             <div class="col-9">
               <input type="file" name="modul1">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul2" class="col-4 col-form-label">Judul 2*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul2">
             </div>
           </div>
           <div class="form-group row">
             <label for="video2" class="col-4 col-form-label">Video 2*</label>
             <div class="col-9">
               <input type="file" name="video2">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul2" class="col-4 col-form-label">Modul 2*</label>
             <div class="col-9">
               <input type="file" name="modul2">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul3" class="col-4 col-form-label">Judul 3*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul3">
             </div>
           </div>
           <div class="form-group row">
             <label for="video3" class="col-4 col-form-label">Video 3*</label>
             <div class="col-9">
               <input type="file" name="video3">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul3" class="col-4 col-form-label">Modul 3*</label>
             <div class="col-9">
               <input type="file" name="modul3">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul4" class="col-4 col-form-label">Judul 4*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul4">
             </div>
           </div>
           <div class="form-group row">
             <label for="video4" class="col-4 col-form-label">Video 4*</label>
             <div class="col-9">
               <input type="file" name="video4">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul4" class="col-4 col-form-label">Modul 4*</label>
             <div class="col-9">
               <input type="file" name="modul4">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul5" class="col-4 col-form-label">Judul 5*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul5">
             </div>
           </div>
           <div class="form-group row">
             <label for="video5" class="col-4 col-form-label">Video 5*</label>
             <div class="col-9">
               <input type="file" name="video5">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul5" class="col-4 col-form-label">Modul 5*</label>
             <div class="col-9">
               <input type="file" name="modul5">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul6" class="col-4 col-form-label">Judul 6*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul6">
             </div>
           </div>
           <div class="form-group row">
             <label for="video6" class="col-4 col-form-label">Video 6*</label>
             <div class="col-9">
               <input type="file" name="video6">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul6" class="col-4 col-form-label">Modul 6*</label>
             <div class="col-9">
               <input type="file" name="modul6">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul7" class="col-4 col-form-label">Judul 7*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul7">
             </div>
           </div>
           <div class="form-group row">
             <label for="video7" class="col-4 col-form-label">Video 7*</label>
             <div class="col-9">
               <input type="file" name="video7">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul7" class="col-4 col-form-label">Modul 7*</label>
             <div class="col-9">
               <input type="file" name="modul7">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul8" class="col-4 col-form-label">Judul 8*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul8">
             </div>
           </div>
           <div class="form-group row">
             <label for="video8" class="col-4 col-form-label">Video 8*</label>
             <div class="col-9">
               <input type="file" name="video8">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul8" class="col-4 col-form-label">Modul 8*</label>
             <div class="col-9">
               <input type="file" name="modul8">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul9" class="col-4 col-form-label">Judul 9*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul9">
             </div>
           </div>
           <div class="form-group row">
             <label for="video9" class="col-4 col-form-label">Video 9*</label>
             <div class="col-9">
               <input type="file" name="video9">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul9" class="col-4 col-form-label">Modul 9*</label>
             <div class="col-9">
               <input type="file" name="modul9">
             </div>
           </div>
           <div class="form-group row">
             <label for="judul10" class="col-4 col-form-label">Judul 10*</label>
             <div class="col-9">
               <input type="text" class="form-control" name="judul10">
             </div>
           </div>
           <div class="form-group row">
             <label for="video10" class="col-4 col-form-label">Video 10*</label>
             <div class="col-9">
               <input type="file" name="video10">
             </div>
           </div>
           <div class="form-group row">
             <label for="modul10" class="col-4 col-form-label">Modul 10*</label>
             <div class="col-9">
               <input type="file" name="modul10">
             </div>
           </div>
           <br>
           <button type="submit" class="btn btn-primary">Simpan</button>
       </div>
       </form>
     </div>
   </div>
 </div>
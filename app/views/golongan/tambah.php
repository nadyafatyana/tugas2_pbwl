  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="<?php echo URL; ?>/golongan/tambah_proses/" method="post">
                <h4 class="text-center font-weight-bold"> Tambah Golongan </h4>
                <div class="form-group">
                    <label for="Passoword">Kode Golongan</label>
                    <input type="text" class="form-control" id="golongan" placeholder="Masukkan Kode Golongan" name="gol_kode">
                </div>                
                <div class="form-group">
                    <label for="name">Nama Golongan</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Golongan" name="gol_nama">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-block">Tambah</button>
            </form>
        </section>
        </section>
    </section>
  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="<?php echo URL; ?>/golongan/edit_proses/" method="post">
                <h4 class="text-center font-weight-bold"> Tambah Golongan </h4>
                <div class="form-group">
                    <label for="Passoword">Kode Golongan</label>
                    <input type="text" class="form-control" id="golongan" placeholder="Masukkan Kode Golongan" name="gol_kode" value="<?php echo $data['gol_kode']; ?>">
                    <input type="hidden" class="form-control" id="golongan" placeholder="Masukkan Kode Golongan" name="gol_id" value="<?php echo $data['gol_id']; ?>">
                </div>                
                <div class="form-group">
                    <label for="name">Nama Golongan</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Golongan" name="gol_nama" value="<?php echo $data['gol_nama']; ?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-block">edit</button>
            </form>
        </section>
        </section>
    </section>
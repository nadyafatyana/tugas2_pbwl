  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="<?php echo URL; ?>/home/daftar_proses/" method="post">
                <h4 class="text-center font-weight-bold">Daftar </h4>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="user_nama">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="user_password">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describeby="emailHelp" placeholder="Masukkan email" name="user_email">
                </div>                                
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="user_alamat">
                </div>
                <div class="form-group">
                    <label for="hp">HP</label>
                    <input type="text" class="form-control" id="hp" placeholder="HP" name="user_hp">
                </div>
                <div class="form-group">
                    <label for="pos">Pos</label>
                    <input type="text" class="form-control" id="pos" placeholder="pos" name="user_pos">
                </div>
                <button type="submit" name="daftar" class="btn btn-primary btn-block m-2">Daftar</button>

            </form>
        </section>
        </section>
    </section>
  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="<?php echo URL; ?>/home/login/" method="post">
                <h4 class="text-center font-weight-bold"> Login </h4>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="user_nama">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="user_password">
                </div>                
                <button type="submit" name="login" class="btn btn-primary btn-block m-2">Login</button>
            </form>
        </section>
        </section>
    </section>
<div class="login-box-container"> 
<div class="login-box">
                <div class="card ">
                <div class="login-logo">
                <img src="<?= base_url('assets/tamplate/') ?>dist/img/daipeduli.png" alt="Logo" class="logo-img">
                <b>Dai Peduli</b>
                </div>
                <!-- /.login-logo -->
                <div class="card-body login-card-body">
                <p class="login-box-msg">  Sign-in Sebagai Admin</p>
                <div class="text-center">
                <div class="image">
                    <img src="<?=base_url('assets/tamplate/') ?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image"style="width: 85px; height: auto;">
                </div>
                </div>
                <br>
                <form method="post" action="<?= base_url('signin/signin_aksi') ?>" >
                    <div class="input-group mb-3">
                    <input type="Username" name="username" class="form-control" placeholder="NIP">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                    </div>
                    <small><span class="text-danger"><?= form_error('username'); ?> </span></small>
                    <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <small><span class="text-danger"><?= form_error('password'); ?> </span></small>
                    <div class="row">
                        <div class="col-8">
                        <!-- Tautan "Kembali" -->
                        <a href="<?= base_url('usersignin')?>" class="btn btn-secondary btn-block" <?php if($this->uri->segment(1) == 'usersignin') echo 'active' ?>>Kembali</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                </div>
                <!-- /.login-card-body -->
            </div>
            </div>
            <!-- /.login-box -->

</div>


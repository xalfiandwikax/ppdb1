<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7 text-center">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/register')?>">
                                
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="nama"
                                        placeholder="Nama" value="<?= set_value('nama');?>">
                                        <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                                        
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_telp" class="form-control form-control-user" id="no_telp"
                                        placeholder="Nomor Telfon" value="<?= set_value('no_telp');?>">
                                        <?= form_error('no_telp','<small class="text-danger">','</small>'); ?>
                                </div>
                                <div class="form-group">    
                                    <input type="text" name="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address"value="<?= set_value('email');?>">
                                        <?= form_error('email','<small class="text-danger">','</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password"class="form-control form-control-user"
                                            id="password1" placeholder="Password">
                                            <?= form_error('password','<small class="text-danger">','</small>'); ?>
                                            
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_confirm"class="form-control form-control-user"
                                            id="password2" placeholder="Repeat Password">
                                            
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<div class="container">
<div class="kotak_login">
    <h2 class="tulisan_login">
        LOGIN
    </h2>
    <div class="card-body">
        <form action="" method="POST">
            
            <?php if (session()->getFlashdata('error')) { ?>
            <div class="pesan_error">
            <?php echo session()->getFlashdata('error') ?>
            </div>
            <?php } ?>
            
            
            <label for="inputUsername">
                    Username
            </label>
            <input type="text" name="admin_username" class="form_login" value="<?php echo session()->getFlashdata('admin_username') ?>" id="inputUsername" placeholder="Masukan Username"/>
            
            <label for="inputPassword">
                    Password
            </label>
            <input type="password" name="admin_password" class="form_login" id="inputPassword" placeholder="Masukan Password">
            
            
            <input type="submit" name="login" class="tombol_login" value="LOGIN" />
            
        </form>
    </div>
</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card login mx-auto mt-5">
            <div class="card-header text-center"> Login </div>   
            <div class="card-body">
                <form action="<?php echo site_url ('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required="required" autofocus="autofocus" >
                            <label for="inputEmail">Username </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN </button>
                    
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/modal.php")?>
    <?php $this->load->view("admin/_partials/jq.php")?>
</body>
</html>    
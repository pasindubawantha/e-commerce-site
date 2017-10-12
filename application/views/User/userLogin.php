<html>

<head>
    <title>User Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .vertical-center {
            min-height: 100%;
            display: flex;
            align-items: center;
        }

        .form-horizontal .control-label{
            /* text-align:right; */
            text-align:left;
        }
    </style>
</head>

<body>

<div class="vertical-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="col-sm-12" style="padding-bottom: 20px">
                    <h1>User Login</h1>
                </div>
<!--                <div class="img-circle">-->
<!--                    <img src="#" alt="Avatar" class="img-circle">-->
<!--                </div>-->
                <?php echo form_open('user/userAuthenticate', 'class="form-horizontal"'); ?>
<!--                <form method="post" action="user/userAuthenticate" class="form-horizontal">-->
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="username">Username : </label>
                        <div class="col-sm-9">
                            <input class="form-control" name="username" placeholder="Sam1990" id="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password" >Password : </label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="xxxxxx" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="#">Forgot Password?</a> <span style="padding-right: 30px"></span>
                            <a href="<?php echo site_url('user'); ?>">Sign Up</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>
                <?php form_close() ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_login') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_login') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="container section_padding_100 clearfix">
    <div class="col-md-6 col-md-offset-3">
        <div class="login-sec">
            <form class="login-cust" method="post" autocomplete="off">
                <p class="login-icon">
                    <i class="pe-7s-user"></i>
                    <b><?php echo lang('global_Welcome') ?>,</b> <?php echo lang('global_Login_to_your_account') ?>.
                </p>
                <div class="notification error closeable login_errors alert-danger alert" style="display: none;"></div>

                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="<?php echo lang('global_Email') ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="<?php echo lang('global_Password') ?>">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <label class="check-text" for="user-session-remember-me">
                                <input name="remember" type="checkbox" tabindex="4" value="1" checked="checked"/>
                                <span class="chk-img"></span>
                                <a id="remember-button"><?php echo lang('global_Remember_me') ?></a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button color big"><?php echo lang('global_login') ?>
                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

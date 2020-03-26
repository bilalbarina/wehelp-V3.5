<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_settings') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_settings') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Content
================================================== -->
<div class="container">
    <!-- Sidebar
   ================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="user-box">
                <div class="user-avatar">
                    <figure>
                        <?php if ($item->image): ?>
                            <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" alt="<?php echo $item->username ?>">
                        <?php else: ?>
                            <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $item->username ?>">
                        <?php endif ?>
                    </figure>
                    <div class="usercontent">
                        <h3><?php echo $item->username ?></h3>
                    </div>
                </div>
                <nav class="navdashboard">
                    <ul class="row">
                        <li class="col-md-6">
                            <a class="sub-menu-block active" href="<?php echo site_url('dashboard/settings') ?>">
                                <i class="fa fa-cogs"></i>
                                <span><?php echo lang('global_settings') ?></span>
                            </a>
                        </li>

                        <li class="col-md-6">
                            <a class="sub-menu-block" href="<?php echo site_url('dashboard/tickets') ?>">
                                <i class="fa fa-ticket"></i>
                                <span><?php echo lang('global_Tickets') ?></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-12">

            <form method="post" class="edit-profile" enctype="multipart/form-data">
                <h3><?php echo lang('global_Update_Your_Profile') ?></h3>
                <div class="row">
                    <?php if ($success) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <?php echo lang('global_Your_profile_Updated_Successfully') ?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (validation_errors()) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <?php echo validation_errors() ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstname"> <?php echo lang('global_First_Name') ?></label>
                        <input class="form-control" type="text" name="firstname" value="<?php echo set_value('firstname', $item->firstname) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname"><?php echo lang('global_Last_Name') ?></label>
                        <input class="form-control" type="text" name="lastname" value="<?php echo set_value('lastname', $item->lastname) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username"><?php echo lang('global_Username') ?></label>
                        <input class="form-control" type="text" name="username" value="<?php echo set_value('username', $item->username) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email"><?php echo lang('global_Email') ?></label>
                        <input class="form-control" type="email" name="email" value="<?php echo set_value('email', $item->email) ?>" disabled="">
                    </div>
                    <div class="selectform-group col-md-6">
                        <label for="country"><?php echo lang('global_Country') ?></label>
                        <?php echo form_dropdown('country_id', $countries, set_value('country_id', $item->country_id), 'data-placeholder="Choose Country" class="form-control"') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password"><?php echo lang('global_Password') ?></label>
                        <input class="form-control" type="password" name="password" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label  class="form-control upload-btn">
                            <i class="fa fa-upload"></i> <?php echo lang('global_Upload_Profile_Image') ?>
                            <input type="file" name="image">
                            <?php if ($item->image): ?>
                                <img src="<?php echo site_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-upload" alt="<?php echo $item->username ?>"/>
                            <?php else: ?>
                                <img src="<?php echo base_url() ?>/cdn/users/default.png" class="img-upload" alt="<?php echo $item->username ?>">
                            <?php endif ?>
                        </label>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="gender"><?php echo lang('global_Gender') ?></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" value="male" name="gender"
                                       <?php if (set_value('gender', $item->gender) == 'male'): ?>checked="checked"<?php endif; ?>><?php echo lang('global_Male') ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" value="female" name="gender"
                                       <?php if (set_value('female', $item->gender) == 'female'): ?>checked="checked"<?php endif; ?>><?php echo lang('global_Female') ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="submit" class="button" value="<?php echo lang('global_submit') ?>">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

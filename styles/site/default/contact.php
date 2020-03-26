<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_Contact') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_Contact') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="footer_contact_with_us_area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading_text">
                    <h2><?php echo lang('global_Contact_with_us') ?></h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="about_box_plus_text">
                    <h2><?php echo lang('global_About') ?></h2>
                    <p><?php echo config('description') ?></p>
                </div>
                <?php if (config('webmaster_email')): ?>
                    <div class="email_us_text">
                        <h2><?php echo lang('global_Email') ?></h2>
                        <p><?php echo config('webmaster_email') ?></p>
                    </div>
                <?php endif ?>
                <?php if (config('phone')): ?>
                    <div class="office_1">
                        <h2><?php echo lang('global_Phone') ?></h2>
                        <p><?php echo config('phone') ?></p>
                    </div>
                <?php endif ?>
                <?php if (config('address')): ?>
                    <div class="office_2">
                        <h2><?php echo lang('global_our_office') ?></h2>
                        <p><?php echo config('address') ?></p>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-7">
                <div class="leave_message_text">
                    <h2><?php echo lang('global_Leave_a_message') ?></h2>
                </div>

                <div class="contact_from">
                    <form action="<?php echo site_url('home/contact') ?>" method="post" id="main_contact_form" autocomplete="off">
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <?php if ($success) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            <?php echo lang('global_Your_Message_Sent_Successfully') ?>.
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (validation_errors()) : ?>
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <i class="fa fa-times-circle"></i>  
                                            <?php echo validation_errors() ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name') ?>" placeholder="<?php echo lang('global_Name') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>" placeholder="<?php echo lang('global_Email') ?>" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" value="<?php echo set_value('subject') ?>" placeholder="<?php echo lang('global_Subject') ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" value="<?php echo set_value('message') ?>" class="form-control" cols="30" rows="10" placeholder="<?php echo lang('global_Message') ?>" ></textarea>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="g-recaptcha" data-sitekey="<?php echo config('google_key') ?>"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn submit-btn"><?php echo lang('global_Send') ?> <?php echo lang('global_Now') ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

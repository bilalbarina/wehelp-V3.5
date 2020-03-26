<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> <?php echo lang('global_home') ?></a>
            </li>
            <li class="active">
                <strong><?php echo lang('global_settings') ?> / <?php echo lang('global_seo') ?> </strong>
            </li>
        </ol>
    </div>
</div>

<div class="panel-body">
    <div class="row">
        <?php echo form_open_multipart(false, 'class="form-horizontal" data-validate="parsley"') ?>
        <?php if (validation_errors()): ?>
            <div class="error"><?php echo validation_errors() ?></div>
        <?php endif ?> 
        <div class="col-md-12">
            <ul class="nav nav-tabs nav-tabs-justified">
                <li class="active">
                    <a href="#setting" data-toggle="tab">
                        <span class="visible"><i class="fa fa-cogs"></i></span>
                        <span class="visible"><?php echo lang('settings_general_settings') ?></span>
                    </a>
                </li>
                <li>
                    <a href="#tickets_settings" data-toggle="tab">
                        <span class="visible"><i class="fa fa-ticket"></i></span>
                        <span class="visible"><?php echo lang('global_tickets_settings') ?></span>
                    </a>
                </li>
                <li>
                    <a href="#contactinfo" data-toggle="tab">
                        <span class="visible"><i class="fa fa-phone"></i></span>
                        <span class="visible"><?php echo lang('global_contact_information') ?></span>
                    </a>
                </li>
             
                <li>
                    <a href="#seo" data-toggle="tab">
                        <span class="visible"><i class="fa fa-bar-chart"></i></span>
                        <span class="visible"><?php echo lang('settings_seo') ?></span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="setting">
                    <div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_language') ?></label>
                            <div class="col-sm-4">
                                <select class="form-control time" name="setting[language]">
                                    <option value="english" <?php if ($item->language == 'english'): ?>selected<?php endif; ?>><?php echo lang('global_english') ?></option>
                                    <option value="arabic" <?php if ($item->language == 'arabic'): ?>selected<?php endif; ?>><?php echo lang('global_arabic') ?></option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label"><?php echo lang('direction') ?></label>
                            <div class="col-sm-4">
                                <select class="form-control time" name="setting[direction]">
                                    <option value="ltr" <?php if ($item->direction == 'ltr'): ?>selected<?php endif; ?>><?php echo lang('ltr') ?></option>
                                    <option value="rtl" <?php if ($item->direction == 'rtl'): ?>selected<?php endif; ?>><?php echo lang('rtl') ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_title') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[title]', set_value('setting[title]', $item->title), 'class="bg-focus form-control" data-required="true"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_logo') ?></label>
                            <div class="compose-message-editor col-sm-8">
                                <input type="file" class="form-control" name="logo">
                            </div>

                            <div class="col-sm-2">
                                <?php if (config('logo')): ?>
                                    <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_favicon') ?> </label>
                            <div class="compose-message-editor col-sm-8">
                                <input type="file" class="form-control" name="favicon">
                            </div>
                            <div class="col-sm-2">
                                <?php if (config('favicon')): ?>
                                    <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>" class="img-inline userpic-32" width="40"/>
                                <?php endif ?>
                            </div>

                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_time_zone') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[default_timezone]', set_value('setting[default_timezone]', $item->default_timezone), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('settings_disqus_username') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[disqus_username]', set_value('setting[disqus_username]', $item->disqus_username), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_google_site_key') ?></label>
                            <div class="col-sm-4">
                                <?php echo form_input('setting[google_key]', set_value('setting[google_key]', $item->google_key), 'class="bg-focus form-control"') ?>
                            </div>
                            <label class="col-sm-2 control-label"><?php echo lang('global_google_secret_key') ?></label>
                            <div class="col-sm-4">
                                <?php echo form_input('setting[google_secret_key]', set_value('setting[google_secret_key]', $item->google_secret_key), 'class="bg-focus form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_Copyright') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[copyright]', set_value('setting[copyright]', $item->copyright), 'class="bg-focus form-control" data-required="true" id="copyright"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_Description') ?></label>
                            <div class="compose-message-editor col-sm-10">
                                <textarea style="height: 150px;" class="form-control" name="setting[description]"><?php echo set_value('setting[description]', $item->description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_home_banner_title') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_input('setting[home_banner_title]', set_value('setting[home_banner_title]', $item->home_banner_title), 'class="bg-focus form-control" data-required="true" id="copyright"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo lang('global_home_banner_description') ?></label>
                            <div class="compose-message-editor col-sm-10">
                                <textarea style="height: 150px;" class="form-control" name="setting[home_banner_description]"><?php echo set_value('setting[home_banner_description]', $item->home_banner_description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                    </div>
                </div>
                <div class="tab-pane" id="tickets_settings">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_display_tickets') ?></label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" value="1" name="setting[display_tickets]"
                                       <?php if (set_value('setting[display_tickets]', $item->display_tickets) == '1'): ?>checked="checked"<?php endif; ?>>
                                       <?php echo lang('global_yes') ?>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="0" name="setting[display_tickets]"
                                       <?php if (set_value('setting[display_tickets]', $item->display_tickets) == '0'): ?>checked="checked"<?php endif; ?>>  
                                       <?php echo lang('global_no') ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_tickets_off_message') ?></label>

                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="setting[tickets_off_message]" id="editor1"><?php echo set_value('lcn[editor1]', $item->tickets_off_message) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_ticket_off_replies') ?></label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea class="form-control" name="setting[ticket_off_replies]" id="editor2"><?php echo set_value('lcn[editor2]', $item->ticket_off_replies) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>
                <div class="tab-pane" id="seo">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('settings_meta_description') ?></label>
                        <div class="compose-message-editor col-sm-10">
                            <textarea style="height: 150px;" class="form-control" name="setting[meta_description]"><?php echo set_value('setting[meta_description]', $item->meta_description) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>
                <div class="tab-pane" id="contactinfo">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('settings_webmaster_email') ?></label>
                        <div class="col-sm-10">
                            <?php echo form_input('setting[webmaster_email]', set_value('setting[webmaster_email]', $item->webmaster_email), 'class="bg-focus form-control" data-required="true" id="webmaster_email"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('settings_support_email') ?></label>
                        <div class="col-sm-10">
                            <?php echo form_input('setting[support_email]', set_value('setting[support_email]', $item->support_email), 'class="bg-focus form-control" data-required="true" id="support_email"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_Phone') ?></label>
                        <div class="col-sm-10">
                            <?php echo form_input('setting[phone]', set_value('setting[phone]', $item->phone), 'class="bg-focus form-control" data-required="true" id="phone"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_Support_Call') ?></label>
                        <div class="col-sm-10">
                            <?php echo form_input('setting[support]', set_value('setting[support]', $item->support), 'class="bg-focus form-control" data-required="true" id="support"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo lang('global_our_office') ?></label>
                        <div class="col-sm-10">
                            <?php echo form_input('setting[address]', set_value('setting[address]', $item->address), 'class="bg-focus form-control" data-required="true" id="address"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_facebook') ?></label>

                        <div class="col-sm-10">
                            <?php echo form_input('setting[facebook]', set_value('setting[facebook]', $item->facebook), 'class="bg-focus form-control" data-required="true" id="facebook"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_instagram') ?></label>

                        <div class="col-sm-10">
                            <?php echo form_input('setting[instagram]', set_value('setting[instagram]', $item->instagram), 'class="bg-focus form-control" data-required="true" id="instagram"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_twitter') ?></label>

                        <div class="col-sm-10">
                            <?php echo form_input('setting[twitter]', set_value('setting[twitter]', $item->twitter), 'class="bg-focus form-control" data-required="true" id="twitter"') ?>
                        </div>
                    </div>
                    <div class="form-group-separator"></div>
                </div>
             
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>

                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                        <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor1', {
<?php if (config('direction') == 'ltr'): ?>
            contentsLangDirection: 'ltr'
<?php else: ?>
            contentsLangDirection: 'rtl'
<?php endif ?>
    });
        CKEDITOR.replace('editor2', {
<?php if (config('direction') == 'ltr'): ?>
            contentsLangDirection: 'ltr'
<?php else: ?>
            contentsLangDirection: 'rtl'
<?php endif ?>
    });
    });
</script>
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
                <strong><?php echo lang('global_Ticket') ?></strong>
            </li>
        </ol>
    </div>
</div>
<section class="mailbox-env">
    <div class="row">
        <div class="col-sm-12 mailbox-right">
            <div class="mail-single">
                <div class="mail-single-header">
                    <h3> <?php echo $item->subject ?></h3>
                </div>
                <div class="mail-single-info">
                    <div class="mail-single-info-user dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if ($item->image): ?> 
                                <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image?>" class="img-circle" width="38" />
                            <?php else: ?>
                                <img src="<?= base_url() ?>/cdn/users/default.png" class="img-circle" width="38" />
                            <?php endif ?>
                            <span><?php echo $item->username ?></span>
                            <em class="time"><b><?php echo lang('global_On') ?></b> <?php echo $item->created ?></em>
                        </a>
                    </div>
                </div>
                <div class="mail-single-body">
                    <p><?php echo $item->message ?></p>
                </div>
                <?php if ($item->attachment): ?>
                    <div class="mail-single-attachments">
                        <h3>
                            <i class="linecons-attach"></i>
                            <?php echo lang('global_Attachment') ?>
                        </h3>
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="<?php echo base_url() ?>/cdn/tickets/<?php echo $item->attachment ?>" class="name">
                                    <?php echo $item->attachment ?>
                                </a>
                                <div class="links">
                                    <a href="<?php echo base_url() ?>/cdn/tickets/<?php echo $item->attachment ?>" target="_blank"><?php echo lang('global_view') ?> - <?php echo lang('global_download') ?></a> 
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
            <?php foreach ($items as $reply): ?>
                <div class="mail-single">
                    <div class="mail-single-info">
                        <div class="mail-single-info-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if ($reply->image): ?> 
                                    <img src="<?php echo base_url() ?>/cdn/users/<?php echo $reply->image ?>" class="img-circle" width="38" />
                                <?php else: ?>
                                    <img src="<?= base_url() ?>/cdn/users/default.png" class="img-circle" width="38" />
                                <?php endif ?>
                                <span><?php echo $reply->username ?></span>
                                <em class="time"><b><?php echo lang('global_On') ?></b> <?php echo $reply->created ?></em>
                            </a>
                        </div>
                    </div>
                    <div class="mail-single-body">
                        <p><?php echo $reply->message ?></p>
                        <?php if ($reply->note): ?>
                            <div class="admin-note alert alert-default">
                                <strong class="upprer-case"><?php echo lang('global_note') ?>: </strong> <?php echo $reply->note ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <?php if ($reply->attachment): ?>
                        <div class="mail-single-attachments">
                            <h3>
                                <i class="linecons-attach"></i>
                                <?php echo lang('global_Attachment') ?>
                            </h3>
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="<?php echo base_url() ?>/cdn/tickets/<?php echo $reply->attachment ?>" class="name">
                                        <?php echo $reply->attachment ?>
                                    </a>
                                    <div class="links">
                                        <a href="<?php echo base_url() ?>/cdn/tickets/<?php echo $reply->attachment ?>" target="_blank"><?php echo lang('global_view') ?> - <?php echo lang('global_download') ?></a> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
            <section class="mailbox-env">
                <div class="row">
                    <!-- Compose Email Form -->
                    <div class="col-sm-12 mailbox-right">
                        <div class="mail-compose">
                            <form method="post" autocomplete="off"  enctype="multipart/form-data">
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                                <?php endif ?>
                                <?php if (isset($success)): ?>
                                    <div class="alert alert-success"><?php echo lang('global_Updated_Successfully') ?></div>
                                <?php endif ?>
                                <div class="mail-header">
                                    <div class="row">
                                        <div class="col-sm-6">							
                                            <h3>
                                                <i class="linecons-pencil"></i>
                                                <?php echo lang('global_reply') ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-white btn-single btn-block btn-icon btn-icon-standalone">
                                            <input name="attachment" type="file">
                                            <i class="fa-plus"></i>
                                            <span><?php echo lang('global_Attachment') ?></span>
                                        </button>
                                    </div>
                                    <div class="compose-message-editor col-sm-4"> <?php echo form_dropdown('status', array('' => lang("global_select_from_menu"), 'open' => lang("global_Open"), 'closed' => lang("global_Closed")), set_value('status', $item->status), 'class="form-control s2example-1"') ?> </div>
                                    <div class="compose-message-editor col-sm-4"> <?php echo form_dropdown('priority', array('' => lang("global_select_from_menu"), 'high' => lang("global_high"), 'medium' => lang("global_medium"), 'low' => lang("global_low")), set_value('priority', $item->priority), 'class="form-control s2example-1"') ?> </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 control-label"><?php echo lang('global_Message') ?><span class="required">*</span></label>
                                    <div class="col-sm-10">
                                        <div class="compose-message-editor">
                                            <textarea class="form-control"  id="sample_wysiwyg" name="message" value="<?php echo set_value('message') ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 control-label"><?php echo lang('global_note') ?></label>
                                    <div class="col-sm-10">
                                        <span class="required"><?php echo lang('global_Only_Administrators_can_see_this_note') ?></span>
                                        <div class="compose-message-editor">
                                            <textarea class="form-control"  id="sample_wysiwyg" name="note" value="<?php echo set_value('note') ?>"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-separator"></div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-secondary btn-block btn-icon btn-icon-standalone">
                                            <i class="linecons-mail"></i>
                                            <span><?php echo lang('global_Send') ?></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<div style="direction: <?php echo lang('dir') ?>;color: #333; width: 60%; margin: auto; border: 1px solid #dedede; font-size: 16px;font-family: sans-serif;">
    <div style="text-align:center; margin-bottom: 15px; background-color: #f9f9f9; padding: 15px 0;">
        <a href="<?= site_url() ?>">
            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" style="height: 80px;">
        </a>
    </div>
    <div style="padding-bottom: 15px; margin-bottom: 15px; padding: 20px;text-align: center;">
        <h3> <?php echo lang('global_Hi') ?>, <b><?php echo $kkk->username ?></b></h3>
        <p style="line-height: 28px;">
            <?php echo lang('global_There_is_a_new_reply_from_our_support_on_your_ticket') ?>  <a href="<?= site_url('dashboard/ticket/' . $kkk->ticket_id) ?>">#<?php echo $kkk->ticket_id ?>: <?php echo $kkk->subject ?></a><br>
            <?php echo lang('global_You_can_check_your_ticket_any_time_from_by_clicking_the_link_below') ?>
            <br><br>
            <b><?php echo lang('global_Thanks_You') ?>!</b>
            <br>
        </p>
        <a href="<?= site_url('dashboard/ticket/' . $kkk->ticket_id) ?>" style="text-decoration: none; background-color: #f2435a;padding: 10px;margin: 10px;display: inline-block;color: #fff; border-radius: 2px;"><?php echo lang('global_Check_Your_Ticket_Now') ?></a>
    </div>
    <div style="text-align: center; border-top: 2px solid #f2435a;padding: 25px 0;background-color: #f9f9f9;">
        <a style="display: inline-block;"><b><?php echo lang('global_Email') ?>:</b> <?php echo config('webmaster_email') ?></a> | <span style="display: inline-block;"><b><?php echo lang('global_Phone') ?>:</b> <?php echo config('phone') ?></span>
    </div>
    <div style="background-color:#f2435a; color: #fff; text-align: center;">
        <p style="margin: 0;padding: 10px 0;"> <?php echo lang('global_Copyright') ?> © <?php echo config('title') ?> <?php echo date('Y'); ?>  </p>
    </div>
</div>

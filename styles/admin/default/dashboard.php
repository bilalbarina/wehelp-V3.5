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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>  <?php echo lang('global_home') ?></a>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('global_dashboard') ?></h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="<?php echo $admins ?>" data-duration="2">
                    <div class="xe-background">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_Admins') ?> </span>
                            <strong class="num"><?php echo $admins ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="56" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Admins') ?></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-primary" data-count=".num" data-from="0" data-to="<?php echo $normal_users ?>" data-duration="2">

                    <div class="xe-background">
                        <i class="fa fa-user-secret"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_normal_users') ?></span>
                            <strong class="num"><?php echo $normal_users ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="56" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('Users') ?></span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-orange"  data-count=".num" data-from="0" data-to="<?php echo $visitors ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-eye"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_visits') ?></span>
                            <strong class="num"><?php echo $visitors ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Visits') ?> </span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter xe-counter-block-blue"  data-count=".num" data-from="0" data-to="<?php echo $categories ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-sitemap"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_Departments') ?></span>
                            <strong class="num"><?php echo $categories ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Departments') ?> </span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="<?php echo $faqs ?>" data-suffix="" data-duration="3">

                    <div class="xe-background">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </div>

                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_Knowledge_Base') ?></span>
                            <strong class="num"><?php echo $faqs ?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_FAQS') ?> </span>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-info"  data-count=".num" data-from="0" data-to="<?php echo $tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_All_Tickets') ?></span>
                            <strong class="num"><?php echo $tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Tickets') ?> </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-success"  data-count=".num" data-from="0" data-to="<?php echo $open_tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-folder-open" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_Open_Tickets') ?></span>
                            <strong class="num"><?php echo $open_tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Open_Tickets') ?> </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-danger"  data-count=".num" data-from="0" data-to="<?php echo $close_tickets ?>" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span><?php echo lang('global_Closed_Tickets') ?></span>
                            <strong class="num"><?php echo $close_tickets ?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span><?php echo lang('global_Total_Closed_Tickets') ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row admin-dashboard">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><i></i> <?php echo lang('global_Open_Tickets') ?></div>
            <?php if ($tickets_open): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo lang('global_Ticket') ?></th>
                            <th><?php echo lang('global_status') ?> </th>
                            <th><?php echo lang('global_sent_by') ?></th>
                            <th><?php echo lang('global_lest_reply') ?></th>
                            <th><?php echo lang('global_operations') ?></th>
                        </tr>
                    </thead>
                    <tbody class="middle-align">
                        <?php foreach ($tickets_open as $item): ?>
                            <tr id="<?php echo $item->ticket_id ?>">
                                <td>#<?php echo $item->ticket_id ?>: <?php echo $item->subject ?></td>
                                <td>
                                    <?php if ($item->status == "open"): ?> 
                                        <?php echo lang('global_Open') ?> 
                                    <?php else: ?>
                                        <?php echo lang('global_Closed') ?> 
                                    <?php endif ?>
                                </td>
                                <td><i class="fa fa-eye"></i> By:<a href="<?php echo site_url('admin/users/manage/' . $item->user_id) ?>"> <?php echo $item->username ?></a></td>
                                <td><?php echo $item->last_reply ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/tickets/manage/' . $item->ticket_id); ?>" class="btn btn-orange btn-sm">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <?php echo lang('global_reply') ?>
                                    </a>
                                    <a class="btn btn-danger btn-sm remove">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        <?php echo lang('global_delete') ?>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p><i class="fa fa-thumbs-up"></i> <?php echo lang('global_There_is_no_open_tickets') ?></p>
            <?php endif ?>
        </div>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/widgets.js"></script>

<script type="text/javascript">
    $(".remove").click(function () {
        var id = $(this).parents("tr").attr("id");
        if (confirm('<?php echo lang('global_Are_you_sure_to_remove_this_record') ?>'))
        {
            $.ajax({
                url: '<?php echo site_url() ?>admin/tickets/delete/' + id,
                type: 'DELETE',
                error: function () {
                    alert('<?php echo lang('global_Something_is_wrong') ?>');
                },
                success: function (data) {
                    $("#" + id).remove();
                    alert('<?php echo lang('global_Record_removed_successfully') ?>');
                }
            });
        }
    });
</script>
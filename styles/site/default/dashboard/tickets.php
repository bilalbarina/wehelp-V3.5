<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_Tickets') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_Tickets') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-success att-ticket" onclick="window.location = '<?php echo site_url('dashboard/ticket') ?>'">
                <i class="fa fa-plus"></i> <?php echo lang('global_new_Ticket') ?>
            </button>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-filter" data-filter="all"><?php echo lang('global_all') ?></button>
                                <button type="button" class="btn btn-warning btn-filter" data-filter="important"><?php echo lang('global_Important') ?></button>
                                <button type="button" class="btn btn-success btn-filter" data-filter="open"><?php echo lang('global_Open') ?></button>
                                <button type="button" class="btn btn-danger btn-filter" data-filter="closed"><?php echo lang('global_Closed') ?></button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-container">
                                <div class="table-responsive">
                                    <table class="table table-filter">
                                        <tbody>
                                            <?php foreach ($items as $item): ?>
                                                <tr class="filter <?php echo $item->status ?> <?php if ($item->important == '1'): ?>important<?php endif ?>">
                                                    <td>
                                                        <?php if ($item->important == '0'): ?>
                                                            <a href="<?php echo site_url('dashboard/important/' . $item->ticket_id); ?>">
                                                            <?php else: ?>
                                                                <a href="<?php echo site_url('dashboard/un_important/' . $item->ticket_id); ?>" class="star-ticket">
                                                                <?php endif ?>
                                                                <i class="fa fa-star"></i> #<?php echo $item->ticket_id ?>
                                                            </a>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <a href="<?php echo site_url('dashboard/ticket/' . $item->ticket_id) ?>" class="media-body">
                                                                <h4 class="title">
                                                                    <span class="dep-title"><b><?php echo lang('global_Department') ?>:</b> <?php echo $item->category ?></span> <?php echo $item->subject ?>
                                                                </h4>
                                                                <p class="summary"><?php if (strlen($item->message) > 35): ?> <?php echo substr($item->message, 0, 50) . ".."; ?> <?php else: ?> <?php echo $item->message; ?> <?php endif ?></p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="ticket_<?php echo $item->status ?>">
                                                            <?php if ($item->status == "open"): ?> 
                                                                <?php echo lang('global_Open') ?> 
                                                            <?php else: ?>
                                                                <?php echo lang('global_Closed') ?> 
                                                            <?php endif ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="media-meta"><?php echo $item->created ?></span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            <?php if (!$items): ?>
                                                <tr>
                                                    <td colspan="6" class="textcenter"><?php echo lang('global_No_Records_Found') ?></td>
                                                </tr>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
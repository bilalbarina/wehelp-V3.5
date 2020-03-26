<div class="page-question">
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
                <strong><?php echo lang('global_Knowledge_Base') ?></strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-question"><?php echo lang('global_Knowledge_Base') ?></h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_created') ?></label>

                <div class="col-sm-4">
                    <?php echo $item->created ?>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('global_Department') ?> <span class="required">*</span></label>
                <div class="col-sm-10">
                    <?php echo form_dropdown('category_id', dd2menu('categories', array('category_id' => 'title')), set_value('category_id', $item->category_id ? $item->category_id : '63'), 'class="form-control s2example-1"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_Question') ?> <span class="required">*</span> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="<?php echo lang('global_Question') ?>" name="question"
                           value="<?php echo set_value('question', $item->question) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"><?php echo lang('global_Answer') ?> <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" name="answer" id="editor1"><?php echo set_value('answer', $item->answer) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> <?php echo lang('global_status') ?> <span class="required">*</span></label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="compose-message-editor col-sm-4">
                            <input type="radio" value="0" name="status"
                                   <?php if (set_value('status', $item->status) == '0'): ?>checked="checked"<?php endif; ?>>
                           <?php echo lang('global_public') ?>
                        </div>
                        <div class="compose-message-editor col-sm-4">
                            <input type="radio" value="1" name="status"
                                   <?php if (set_value('status', $item->status) == '1'): ?>checked="checked"<?php endif; ?>>
                         <?php echo lang('global_private') ?>
                        </div>
                        <div class="compose-message-editor col-sm-4">
                            <input type="radio" value="2" name="status"
                                   <?php if (set_value('status', $item->status) == '2'): ?>checked="checked"<?php endif; ?>>
                             <?php echo lang('global_registered_users') ?>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="<?php echo lang('global_submit') ?>">
                    <a href="<?php echo site_url('admin/knowledge_base/index'); ?>" class="btn btn-danger"><?php echo lang('global_cancel') ?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo STYLE_JS ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor1');
    });
</script>



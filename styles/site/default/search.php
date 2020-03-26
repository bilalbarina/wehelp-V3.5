<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_Search_Results') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_Search_Results') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="frequently_asked_question section_padding_100 clearfix cat-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <!-- Heading Text  -->
                <div class="heading_text text-left">
                    <h2><?php echo lang('global_Search_Result_for') ?>: <b class="search-keyword">"<?php echo set_value('question') ?>" (<?php echo $count ?>)</b> </h2>
                </div>
            </div>
            <div class="col-md-4">
                <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                    <input class="form-control" type="search" placeholder="<?php echo lang('global_ex') ?>. <?php echo lang('global_installation') ?>" name="question" value="<?php echo set_value('question') ?>">
                </form>
            </div>
            <?php foreach ($items as $faq): ?>
                <div class="col-md-6">
                    <a href="<?php echo site_url('topic/' . $faq->faq_id . '-' . permalink($faq->question)) ?>" class="single_faq">
                        <h5>
                            <i class="pe-7s-comment"></i>
                            <?php if (strlen($faq->question) > 70): ?> 
                                <?php echo substr($faq->question, 0, 70) . ".."; ?>
                            <?php else: ?> 
                                <?php echo $faq->question; ?>
                            <?php endif ?>
                        </h5>
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="col-md-12">
                <?php if (!$items): ?>
                    <div class="search-result-message error">
                        <?php echo lang('global_No_results_have_been_found,_Try_different word') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="pagination-container">
                <ul class="pagination">
                    <?php echo $pagination ?>
                </ul>
            </div>
        </div>
    </diV>
</section>

<section class="still_have_a_question section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ask_a_Question_icon">
                    <i class=" pe-7s-help2"></i>
                </div>
                <div class="still_hq_heading">
                    <h2><?php echo lang('global_Still_no_luck?_We_can_help') ?></h2>
                    <p><?php echo lang('global_Contact_us_and_we’ll_get_back') ?></p>
                </div>
                <div class="ask_a_Question_button">
                    <?php if (!(user())): ?>
                        <a class="alert-login"><i class="fa fa-ticket"></i> <?php echo lang('global_Submit_a_Ticket') ?></a>
                    <?php else: ?>
                        <a href="<?php echo site_url('dashboard/ticket') ?>"><i class="fa fa-ticket"></i> <?php echo lang('global_Submit_a_Ticket') ?></a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

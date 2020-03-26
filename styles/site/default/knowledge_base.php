<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_Knowledge_Base') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> <?php echo lang('global_home') ?></a></li>
                            <li class="active"><?php echo lang('global_Knowledge_Base') ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="home-search clearfix hero">
    <div class="container">
        <div class="hero-inner">
            <h1 class="help-center-name"><?php echo lang('global_How_can_we_help') ?></h1>
            <form class="search search-full" action="<?php echo site_url('home/search') ?>" method="get">
                <input class="form-control" type="search" placeholder="<?php echo lang('global_ex') ?>. <?php echo lang('global_installation') ?>" name="question" value="<?php echo set_value('question') ?>">
            </form>
        </div>
    </div>
</section>
<section class="frequently_asked_question section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="heading_text">
                    <h2><?php echo lang('global_Select_a_Department') ?></h2>
                    <p><?php echo lang('global_Do_You_Want_to_Know') ?></p>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="faqs-categories">
            <div class="row">
                <?php foreach ($categories as $item): ?>
                    <div class="col-md-4 text-center">
                        <a href="<?php echo site_url('department/' . $item->category_id . '-' . permalink($item->title)) ?>" class="category-block">
                            <img src="<?php echo base_url() ?>/cdn/icons/<?php echo $item->icon ?>" alt="<?php echo $item->title ?>">
                            <h3><?php echo $item->title ?></h3>
                            <p>
                                <?php if (strlen($item->description) > 40): ?> 
                                    <?php echo substr($item->description, 0, 100) . ".."; ?>
                                <?php else: ?> 
                                    <?php echo $item->description; ?>
                                <?php endif ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="random-faqs">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="heading_text">
                        <h2><?php echo lang('global_Frequently_Asked_Question') ?></h2>
                        <p><?php echo lang('global_Do_You_Want_to_Know') ?></p>
                        <div class="line-shape"></div>
                    </div>
                </div>

                <?php foreach ($faqs as $item): ?>
                    <div class="col-md-6">
                        <a href="<?php echo site_url('topic/' . $item->faq_id . '-' . permalink($item->question)) ?>" class="single_faq">
                            <h5>
                                <i class="pe-7s-comment"></i>
                                <?php if (strlen($item->question) > 70): ?> 
                                    <?php echo substr($item->question, 0, 70) . ".."; ?>
                                <?php else: ?> 
                                    <?php echo $item->question; ?>
                                <?php endif ?>
                            </h5>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </diV>

    </div>
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

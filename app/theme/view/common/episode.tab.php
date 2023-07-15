<div class="post-toolbar">
    <ul data-ajax-tab="">
        <li>
            <a href="<?php echo post($Listing['id'],$Listing['self'],$Listing['type']);?>" data-url="<?php echo post($Listing['id'],$Listing['self'],$Listing['type']).'/overview?ajax=true';?>" class="<?php echo (empty($Route->params->tab) ? 'active' : '');?>">Overview</a>
        </li>
        <?php if(empty($Data['comment']) OR (isset($Data['comment']) AND $Data['comment'] != 1)) { ?>
        <li>
            <a href="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/comments';?>" data-url="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/comments?ajax=true';?>" class="<?php echo ((isset($Route->params->tab) AND $Route->params->tab == 'comments') ? 'active' : '');?>">Comment<span class="ms-2 fs-xs opacity-50"><?php echo $Listing['comments'];?></span></a>
        </li>
        <?php } ?>
        <li class="mx-xl-3"></li>
        <li>
            <a href="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/subtitle';?>" data-url="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/subtitle?ajax=true';?>" class="<?php echo ((isset($Route->params->tab) AND $Route->params->tab == 'subtitle') ? 'active' : '');?>">Subtitle</a>
        </li>
        <li>
            <a href="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/download';?>" data-url="<?php echo episode($Listing['id'],$Listing['self'],$Listing['season_name'],$Listing['title_number']).'/download?ajax=true';?>" class="<?php echo ((isset($Route->params->tab) AND $Route->params->tab == 'download') ? 'active' : '');?>">Download</a>
        </li>
    </ul>
</div>
<div class="layout-section pt-2">
    <div class="layout-tab-content">

            <?php if(empty($Route->params->tab)) { ?>
            <?php require PATH . '/theme/view/common/episode.overview.php'; ?>
            <?php } elseif(isset($Route->params->tab) AND in_array($Route->params->tab,array('comments','multimedia','casting','download','subtitle'))) { ?>
            <?php require PATH . '/theme/view/common/post.'.$Route->params->tab.'.php'; ?>
            <?php } else { ?>
            <?php header('location:'.APP.'/404');?>
            <?php } ?>
    </div>
     
</div>
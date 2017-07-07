<html>
<head>

<link rel="stylesheet" href="<?php echo $this->css_header;?>" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['rootdir'] . '/../library/js/fancybox/jquery.fancybox-1.2.6.css';?>" media="screen" />
<script type="text/javascript" src="<?php echo $GLOBALS['rootdir'] . '/../library/js/jquery.1.3.2.js';?>"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['rootdir'] . '/../library/js/common.js';?>"></script>
</head>
<!--
<script>
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
-->
<body>

<div>
    <h5 style="padding:5px"><b><?php echo xl("Practice Settings");?></b></h5>
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
    <div class="row well">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="col-md-2 col-xs-4">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>pharmacy&action=list"><?php echo "<h5>".xl("Pharmacies")."</h5>";?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>insurance_company&action=list"><?php echo "<h5>".xl("Insurance Companies")."</h5>";?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>insurance_numbers&action=list"><?php echo "<h5>".xl("Insurance Numbers")."</h5>";?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>x12_partner&action=list"><?php echo "<h5>".xl("X12 Partners")."</h5>";?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>document&action=queue"><?php echo "<h5>".xl("Documents")."</h5>";?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>hl7&action=default"><?php echo "<h5>".xl("HL7 Viewer")."</h5>";?></a>
            </li>
        </ul>        
    </div>
    
    <div>
        <h5><b><?php echo $this->action_name;?></b></h5>        
    </div>
    
    <div class="tab-content">
        <div class="tab-pane fade active in">
            <?php echo $this->display_action;?>
        </div>
    </div>
    
</div>
</body>
</html>

<html>
<head>
<?php html_header_show();?>

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
    <h6 style="padding:5px"><b><?php echo xl("Practice Settings");?></b></h6>
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="col-md-2 col-xs-4">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>pharmacy&action=list"><?php echo xl("Pharmacies");?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>insurance_company&action=list"><?php echo xl("Insurance Companies");?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>insurance_numbers&action=list"><?php echo xl("Insurance Numbers");?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>x12_partner&action=list"><?php echo xl("X12 Partners");?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>document&action=queue"><?php echo xl("Documents");?></a>
            </li>
            <li class="col-md-2 col-xs-4" data-toggle="tab">
                <a role="tab" data-toggle="tab" href="<?php echo $this->top_action;?>hl7&action=default"><?php echo xl("HL7 Viewer");?></a>
            </li>
        </ul>        
    </div>
    
    <br/>
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

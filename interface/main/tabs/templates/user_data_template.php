<style>
    .glyphicon{
        padding-right:20px;
    }
    .dropdown-menu>li{
        cursor: pointer;
        padding-right:5px; 
        padding-left: 10px;  
        padding-bottom : 0px; 
        font-weight : 600;
    }   
    .dropdown-menu>li:hover{
        text-decoration : underline;
        color: #31b0d5;
    }

</style>

<script type="text/html" id="user-data-template">
    
    <!-- ko with: user -->    
        
        <ul  class="nav navbar-nav navbar-right" title="<?php echo xla('Authorization group') ?>">
            <!--
            <span data-bind="text:fname"></span>
            <span data-bind="text:lname"></span>
            <div class="userfunctions">                
			    <?php if ($GLOBALS['development_flag'] ) { ?>
                <div data-bind="click: framesMode"><?php echo xlt("Frames Mode");?></div>
				<?php } ?>
                <div data-bind="click: userPrefs"><?php echo xlt("User Preferences");?></div>
                <div data-bind="click: changePassword"><?php echo xlt("Change Pass Phrase");?></div>
                <div data-bind="click: logout"><?php echo xlt("Logout");?></div>
                
            </div>
            -->            
            <li class="dropdown" > 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>                
                </a>            
                <ul class="dropdown-menu">
                    <li><span data-bind="text:fname"></span>&nbsp;<span data-bind="text:lname"></span></li>
                    <li class="divider"></li>
                    <?php if ($GLOBALS['development_flag'] ) { ?>
                    <li data-bind="click: framesMode"><?php echo xlt("Frames Mode");?></li>
                    <?php } ?>
                    <li data-bind="click: userPrefs"><?php echo xlt("User Preferences");?></li>
                    <li data-bind="click: changePassword"><?php echo xlt("Change Pass Phrase");?></li>
                    <li data-bind="click: logout"><?php echo xlt("Logout");?></li>            
                </ul>
            </li>
            <!--
            <ul class="userfunctions">  
                <?php if ($GLOBALS['development_flag'] ) { ?>
                <div data-bind="click: framesMode"><?php echo xlt("Frames Mode");?></div>
				<?php } ?>
                <div data-bind="click: userPrefs"><?php echo xlt("User Preferences");?></div>
                <div data-bind="click: changePassword"><?php echo xlt("Change Pass Phrase");?></div>
                <div data-bind="click: logout"><?php echo xlt("Logout");?></div>
            </ul>
            -->
        </ul>   
        
        
    <!-- /ko -->
    
</script>

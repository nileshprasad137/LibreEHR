<style>
    .nav>li>a{
        color: #1057c9;
        cursor: pointer;
        font-size: 14px;
        font-weight : 600;
    }
    .nav>li>a:hover > ul{
        display:none;
    }
    .icon-bar{
        color:white;
        background: black;
    }
     
    .dropdown-submenu {
        position:relative;
    }
    .dropdown-submenu>.dropdown-menu {
        top:0;left:100%;
        margin-top:-6px;margin-left:-1px;
        -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
    }
    
    .dropdown-submenu > a:after {    
        content: " ";
        display: block;
        float: right;  
        height: 0;     
        margin-right: -10px;
        margin-top: 5px;
        width: 0;
    }
    
    .dropdown-submenu:hover>a:after {
        border-left-color:#555;
    }
    .dropdown-menu>li>a{
        cursor: pointer;
        padding : 5px;     
        padding-left: 20px;   
        font-weight : 600;
    }   
    .dropdown-menu>li>a:hover{
        text-decoration : underline;
        color: #31b0d5;        
    }
    .navbar-collapse{
        padding-left : 0px;        
    }
    .navbar-nav>li>a{
        padding-top : 5px;
        padding-bottom : 5px;
    }
</style>
<script type="text/html" id="menu-action">
    <a data-bind="text:label,click: menuActionClick,css: {menuDisabled: ! enabled()}"></a>
</script>
<script type="text/html" id="menu-header">
    <!--
    <div class="menuSection">
        <div class='menuLabel' data-bind="text:label"></div>
        <ul class="menuEntries" data-bind="foreach: children">
           <li data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>
        <ul>
    </div>
    -->
    <a data-bind="text:label" class="dropdown-toggle " data-toggle="dropdown"> <b class="caret"></b></a>
    <ul class="dropdown-menu" data-bind="foreach: children">
        <!--<li data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>-->
        <li class="dropdown dropdown-submenu" data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>

    </ul>
</script>
<script type="text/html" id="menu-template">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>        
    </div>    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" data-bind="foreach: menu">
          <li class="dropdown" data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>            
        </ul>
        <!--
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#">
                <span class="glyphicon glyphicon-user" data-bind="template: {name: 'user-data-template', data:application_data}"></span>
            </a>
        </li>
        </ul>
        -->
    </div>
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('.nav li.dropdown').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
});
</script>



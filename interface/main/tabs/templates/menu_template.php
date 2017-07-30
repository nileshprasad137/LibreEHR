<style>
    .nav>li>a{
        color: #31b0d5;
        cursor: pointer;
        font-size: 14px;
    }
    .nav>li>a:hover > ul{
        display:none;
    }
    .icon-bar{
        color:white;
        background: black;
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
        <li data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>

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



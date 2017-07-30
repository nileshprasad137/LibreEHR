<script type="text/html" id="menu-action">
    <a href="#" data-bind="text:label,click: menuActionClick,css: {menuDisabled: ! enabled()}"></a>
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
    <a href="#" data-bind="text:label" class="dropdown-toggle " data-toggle="dropdown"> <b class="caret"></b></a>
    <ul class="dropdown-menu" data-bind="foreach: children">
        <li data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }, css:{name:header ? 'dropdown':''}"></li>
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
        <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" data-bind="foreach: menu">
          <li data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }, css:{name:header ? 'dropdown':''}"></li>            
        </ul>
    </div>
</script>


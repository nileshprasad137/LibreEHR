<script type="text/html" id="menu-action">
    <div class="nav-link" data-bind="text:label,click: menuActionClick,css: {menuDisabled: ! enabled()}"></div>
</script>
<script type="text/html" id="menu-header">
    
    <div class="nav-item "><!-- For the items which have dropdown-->
        <div class="dropdown-toggle" data-toggle="dropdown" data-bind="text:label"></div>
        <ul class="dropdown-menu" data-bind="foreach: children" >
           <li class="dropdown-item" data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></li>
        <ul>
    </div>
</script>
<script type="text/html" id="menu-template">
    <ul class='nav navbar-nav' data-bind="foreach: menu">
            <li class="nav-item"><div data-bind="template: {name:header ? 'menu-header' : 'menu-action', data: $data }"></div></li>
    </ul>
</script>
<!--
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
-->
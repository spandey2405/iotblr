<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 01/01/16
 * Time: 5:19 PM
 */

$data = file_get_contents('content/header.json');
$menu_items = json_decode($data, true);

foreach ($menu_items as $menu => $href) {
    $menu_bar_items .= "<li><a href='$href'>$menu</a></li>";
}

echo "
<nav class='navbar navbar-default'>
    <div class='container-fluid'>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
            <a class='navbar-brand0' href='#'><img src='src/images/logo.png' style='height:50px;'></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
            $menu_bar_items
            </ul>
            <ul class='nav navbar-nav navbar-right'>

            </ul>
        </div>
    </div>
</nav>
";
?>
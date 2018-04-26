<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>T4</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="container">
    <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p class="description"><?php bloginfo( 'description' ); ?></p><header>
  <div class="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php">COLUMN</a></li>
          <li><a href="index.php">CONTACT</a></li>
        </ul>
      </div></div>
      <div class="header-pc-menu">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php">COLUMN</a></li>
        <li><a href="index.php">CONTACT</a></li>
      </ul>
      </div></div>
  </header>

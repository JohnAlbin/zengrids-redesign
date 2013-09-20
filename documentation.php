<!DOCTYPE html>
<?php $thisPage="Documentation"; ?>
<head>
  <meta charset="utf-8">

  <title>ZenGrids › Documentation</title>

  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="cleartype" content="on">

  <link media="screen" href="css/screen.css" rel="stylesheet" type="text/css" />
	
  <!-- Imports from CloudTypography -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6838432/637462/css/fonts.css" />
</head>

<body>
  <!-- Header & Nav partial -->  
  <?php include "_header.php"; ?>

  <div class="container">
    <header class="l-1up">
      <h1 class="display-text page-title">Documentation</h1>
    </header>

    <!-- Rail Content -->
    <div class="l-rail">

      <nav class="subnavigation">
        <ul>
          <li><a href="#" class="level-1">Overview</a></li>
          <li><a href="#" class="level-1">The default "grids" module</a>
            <ul>
              <li><a href="#">Configurable variables</a>
                <ul>
                  <li><a href="#">Common variables</a></li>
                  <li><a href="#">Adaptive or fixed design variable</a></li>
                  <li><a href="#">Legacy IE support variable</a></li>
                  <li><a href="#">RTL language variable</a></li>                  
                </ul>
              </li>

              <li><a href="#">Mix-ins</a>
                <ul>
                  <li><a href="#">zen-grid-container</a></li>
                  <li><a href="#">zen-grid-item</a></li>
                  <li><a href="#">zen-grid-tiem-base</a></li>
                  <li><a href="#">zen-new-row</a></li>                  
                </ul>
              </li>

              <li><a href="#">Functions</a>
                <ul>
                  <li><a href="#">zen-half-gutter</a></li>
                  <li><a href="#">zen-unit-width</a></li>
                  <li><a href="#">zen-grid-item-width</a></li>
                  <li><a href="#">zen-direction-switch</a></li>                  
                </ul>
              </li>
            </ul>              
          </li>
          <li><a href="#" class="level-1">The "background" module</a></li>
          <li><a href="#" class="level-1">The "flow" module</a></li>
          <li><a href="#" class="level-1">Examples</a></li>
        </ul>
      </nav> 

    </div>


    <!-- Page Content -->
    <div class="l-main-content">

      <h2>Second-level Heading</h2>
      <p>Specifies the width of the gutters; half of the gutter will be placed on each side of a grid item (as padding). For a proper sense of aesthetics, we recommend this value be proportional to your base font by setting $zen-gutter-width equal to your base line height, $base-line-height.</p>

      <h3>Third-level Heading</h3>
      <p>Specifies the width of the gutters; half of the gutter will be placed on each side of a grid item (as padding). For a proper sense of aesthetics, we recommend this value be proportional to your base font by setting $zen-gutter-width equal to your base line height, $base-line-height.</p>

      <h4>Fourth-level Heading</h4>
      <p>Specifies the width of the gutters; half of the gutter will be placed on each side of a grid item (as padding). For a proper sense of aesthetics, we recommend this value be proportional to your base font by setting $zen-gutter-width equal to your base line height, $base-line-height.</p>

      <h5>Fifth-level Heading</h5>
      <p>Specifies the width of the gutters; half of the gutter will be placed on each side of a grid item (as padding). For a proper sense of aesthetics, we recommend this value be proportional to your base font by setting $zen-gutter-width equal to your base line height, $base-line-height.</p>

      <h6>Sixth-level Heading</h6>
      <p>Specifies the width of the gutters; half of the gutter will be placed on each side of a grid item (as padding). For a proper sense of aesthetics, we recommend this value be proportional to your base font by setting $zen-gutter-width equal to your base line height, $base-line-height.</p>

    </div>

  </div>

  <!-- Footer partial -->  
  <?php include "_footer.php"; ?>

</body>
</html>
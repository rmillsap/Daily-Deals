<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>

      <header class="block span-24 shadow">
          <div class="logo">Daily Deals</div>
          <nav>
              <ul>
                  <li class="selected round">
                      <?php echo link_to("Featured Deals", "/") ?>
                  </li>
                  <li>
                      <?php echo link_to("All Deals", "/search") ?>
                  </li>
              </ul>
          </nav>
      </header>

  <div class="container column span-24">

      <div class="block">
          <div class="column span-18 content-box left-column shadow">
              Deals feed...
          </div>

          <div class="column span-4 right-column">
              
              <div class="content-box shadow">
                  <h1>More Deals</h1>

              </div>

          </div>

      </div>



  </div>

    <?php echo $sf_content ?>

  </body>
</html>

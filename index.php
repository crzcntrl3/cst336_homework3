<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title> Rick & Morty API search</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
          <div class="container"><a class ="navbar-brand" href="#">
            <img src="https://www.firstcomicsnews.com/wp-content/uploads/2017/09/Rick-and-Morty-logo-600x257.png" class="image-logo-crc" alt="">
          </a>
            <span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav"></ul>
                <form class="form-inline ml-auto" target="_self">
                  <div class="form-group">
                    <form class="form-inline search-form">
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control search-field" type="text" placeholder="Search character list..">
                        <div class="input-ground-append"><button class="btn btn-light search-btn" type="button">Search</button></div>
                      </div>
                    </form>
                  </div>
                </form>
              </div>
            </div>
          </nav>
          <div class="search"></div>
          <div class="loader"></div>
        </div>
          <div class="container">
            <div class="row search-output">
            </div>
          </div>
      </div>
    <script src="js/main.js"></script>
    <footer>
      <br />
      CST336 Internet Programming. 2020&copy; Cruz <br />
      <strong>Disclaimer:</strong> The information in this webpage is fictitious.<br />
      It is used for academic purposes only.
      <figure>
        <img src="img/CSUMB_Logo_Black.png" alt="CSUMB Logo" class="footer-logo" />
      </figure>
    </footer>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">

    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Cobros</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cobro/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

    </header>
    <!-- Sidebar menu-->
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> EMAPAQ</h2>
                </div>

                <div class="col-6">
                  <h5 class="text-right">Date: 17/07/2020</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">
                  <address><strong>EMAPAQ</strong><br>Direccion: PLAZA 6 DE AGOSTO ACERA ESTE S/N, QUILLACOLLO, CBBA<br>Telefono: 62-454225<br>Email: emapaq@gmail.com</address>
                </div>
                <div class="col-4">
                  <address><strong></strong><br><br><br><br></address>
                </div>

                <div class="col-4"><b></b><br><br><b></b><br><b></b><br><b></b> </div>
              </div>
                <br>
                <h1 align=center>Cobros</h1>
                <li class="app-search">
                  <input class="app-search__input" type="search" placeholder="Search">
                  <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
                <br>
                <br>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Contribuyente</th>
                        <th>Medidor #</th>
                        <th>Fecha</th>
                        <th>Consumo</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>juan perez</td>
                        <td>1254444</td>
                        <td>2020/07/15</td>
                        <td>$195.32</td>
                        <td><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Pagar</a></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>juan perez</td>
                        <td>152225552</td>
                        <td>2020/07/15</td>
                        <td>$250.55</td>
                        <td><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Pagar</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">

              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>

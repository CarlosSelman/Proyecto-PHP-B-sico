<!doctype html>
<html lang="es">
  <head>
    <title>CRUD APP</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="dist/css/dataTables/bootstrap-tables.min.css">
      
      <link rel="stylesheet" type="text/css" href="dist/css/dataTables/dataTables.bootstrap4.min.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  </head>
  <body>
  <nav style="
    min-height: 80px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    box-shadow: 8px 15px 28px rgba(0,0,0,0.2);
    position: sticky;
    top:0;
    z-index: 1000;
    background-color: #fff;"
  
            class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"><strong>CRUD APP</strong></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex">
                      <!-- Button trigger modal -->
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i style="color:white" class="bi bi-info-circle-fill"></i>
                        </button>
                    </form>
                  </div>
                </div>
              </nav>
              <br>
    
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">CRUD APP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <img src="img/info.png" style="max-width:100%">
                </div>
                </div>
            </div>
            </div>

            
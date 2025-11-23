<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DVCar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" index.php="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionario.php">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente.php">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-marca.php">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelo.php">Listar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vendas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-venda.php">Listar</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container-mt-3">
        <div class="row">
            <div class="col">
                <?php
                  //include das páginas
                    switch (@$_REQUEST['page']){
                        //funcionario
                        case 'cadastrar-funcionario.php':
                            include('cadastrar-funcionario.php');
                            break;
                        case 'listar-funcionario.php':
                            include('listar-funcionario.php');
                            break;
                        case 'editar-funcionario.php':
                            include('editar-funcionario.php');
                            break;
                        case 'salvar-funcionario.php':
                            include('salvar-funcionario.php');
                            break;

                        //Cliente
                        case 'cadastrar-cliente.php':
                            include('cadastrar-cliente.php');
                            break;
                        case 'listar-cliente.php':
                            include('listar-cliente.php');
                            break;
                        case 'editar-cliente.php':
                            include('editar-cliente.php');
                            break;
                        case 'salvar-cliente.php':
                            include('salvar-cliente.php');
                            break;

                        //marca
                        case 'cadastrar-marca.php':
                            include('cadastrar-marca.php');
                            break;
                        case 'listar-marca.php':
                            include('listar-marca.php');
                            break;
                        case 'editar-marca.php':
                            include('editar-marca.php');
                            break;
                        case 'salvar-marca.php':
                            include('salvar-marca.php');
                            break;

                        //modelo
                        case 'cadastrar-modelo.php':
                            include('cadastrar-modelo.php');
                            break;
                        case 'listar-modelo.php':
                            include('listar-modelo.php');
                            break;
                        case 'editar-modelo.php':
                            include('editar-modelo.php');
                            break;
                        case 'salvar-modelo.php':
                            include('salvar-modelo.php');
                            break;
                            
                        //venda
                        case 'cadastrar-venda.php':
                            include('cadastrar-venda.php');
                            break;
                        case 'listar-venda.php':
                            include('listar-venda.php');
                            break;
                        case 'editar-venda.php':
                            include('editar-venda.php');
                            break;
                        case 'salvar-venda.php':
                            include('salvar-venda.php');
                            break;

                        default:
                            print "<h1>Bem vindo ao sistema da DVCar</h1>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
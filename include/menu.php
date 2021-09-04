<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="imagem/NimaxL.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2">
      <span class="brand-text font-weight-light">NIMAX</span>
    </a>

    <div class="sidebar">
          <?php
                $sq="select * from cadastro where IdCadastro='$_SESSION[IdCadastro]'";
                $qu=mysqli_query($con,$sq);
                while($f1=  mysqli_fetch_assoc($qu)){
          ?>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $f1['foto'];?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="profile.php" class="d-block"><?php echo $f1['nomeCad'];?></a>
            </div>
          </div>

      <?php } ?>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Procurar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active bg-secondary">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Painel de Controle
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-secondary"></i>
                  <p>Painel de Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard2.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-secondary"></i>
                  <p>Painel de Lucros</p>
                </a>
              </li>
            </ul>
          </li>
          
      
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active bg-primary">
            <i class="nav-icon fas fa-building"></i>
              <p>
                Empresa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cadastro_empresa.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
             
                <li class="nav-item">
                  <a href="empresa.php" class="nav-link">
                    <i class="nav-icon far fa-circle text-primary"></i>
                    <p>Informações</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active bg-success">
            <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Planos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="planos.php" class="nav-link">
                <i class="nav-icon far fa-circle text-success"></i>
                  <p>
                    Comprar
                  </p>
                </a>
              </li>
             
                <li class="nav-item">
                  <a href="info_planos.php" class="nav-link">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Informações</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
          <a href="#" class="nav-link active bg-warning">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Agenda
                <i class="right fas fa-angle-left"></i>
                  <?php 
                      $sq="select IdProblema from problema order by IdProblema";
                      $qu=mysqli_query($con,$sq);
                      $row=mysqli_num_rows($qu);

                      if($_SESSION['profile']=='Admin'){
                        echo"<span class='badge badge-danger right'>$row</span>";
                      }
                  ?>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
                if($_SESSION['profile']=='Admin'){
                  echo "
                    <li class='nav-item'>
                      <a href='marca_agenda.php' class='nav-link'>
                      <i class='nav-icon far fa-circle text-warning'></i>
                        <p>
                          Marcar Agenda
                        </p>
                      </a>
                    </li>
                  ";
                }
              ?>
             
                <li class="nav-item">
                  <a href="agenda.php" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>
                      Agenda Marcada
                      <span class="badge badge-info right">   
                        <?php 
                            $sq="select IdProblema from problema where fk_cadastro='$_SESSION[IdCadastro]'  order by IdProblema";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"$row";
                        ?>
                      </span>
                    </p>
                  </a>
                </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="./bo.php" class="nav-link">
              <i class="nav-icon far fas fa-comment"></i>
              <p>
                Fale Conosco
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php" class="nav-link bg-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
</aside>
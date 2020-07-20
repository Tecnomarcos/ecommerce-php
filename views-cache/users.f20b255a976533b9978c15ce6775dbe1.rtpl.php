<?php if(!class_exists('Rain\Tpl')){exit;}?>

  <!-- Page Content -->
  <div class="container bottom-container">

    <div class="row">

      <div class="col-lg-3">
        <img src="../assets/img/logo_inclusao.png" class="img-fluid my-4" alt="Núcleo de pessoal" title="Núcleo de pessoal">
        <div class="list-group">
          <a class="list-group-item" href="#"><i class="far fa-hand-point-up"></i> Controle de ponto</a>
          <a class="list-group-item" href="#"><i class="far fa-arrow-alt-circle-right"></i> Link</a>
          <a class="list-group-item" href="#"><i class="fab fa-angellist"></i> Outro Link</a>
          <a class="list-group-item" href="#"><i class="far fa-hand-point-up"></i> Controle de ponto</a>
          <a class="list-group-item" href="#"><i class="far fa-arrow-alt-circle-right"></i> Link</a>
          <a class="list-group-item" href="#"><i class="fab fa-angellist"></i> Outro Link</a>
          <a class="list-group-item" href="#"><i class="far fa-hand-point-up"></i> Controle de ponto</a>
          <a class="list-group-item" href="#"><i class="far fa-arrow-alt-circle-right"></i> Link</a>
          <a class="list-group-item" href="#"><i class="fab fa-angellist"></i> Outro Link</a>

        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <section class="content-header">
            <h1>
              Lista de Usuários
            </h1>
            <ol class="breadcrumb">
              <li><a href="/admin"><i class="fa fa-dashboard"></i> Home/</a></li>
              <li class="active"><a href="/admin/users">Usuários</a></li>
            </ol>
        </section>

        <div class="box box-primary">
            
            <div class="box-header">
              <a href="/admin/users/create" class="btn btn-success">Cadastrar Usuário</a>
            </div>

            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th style="width: 60px">Admin</th>
                    <th style="width: 140px">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>

                  <tr>
                    <td><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                    <td><?php if( $value1["inadmin"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?></td>
                    <td>
                      <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        <!--
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
              <form class="form-horizontal">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Pesquisar detento (matrícula, nome, nome do pai ou nome da mãe)" aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
          </div>
        </div>
        -->

        <!-- /.card
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>

        /.card -->

      </div>
      <!-- /.col-lg-9 -->
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->

  

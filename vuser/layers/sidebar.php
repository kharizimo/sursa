<?php 
$lock_url=$_SERVER['REQUEST_URI'];
$_menu=[
  ['title'=>'Accueil','url'=>'./'],
  ['header'=>'Mon compte'],
  ['title'=>'Mon profil','url'=>'profil'],
  ['title'=>'Mot de passe','url'=>'pwd'],
  ['title'=>'Deconnexion','url'=>'engine/vuser/logout'],
  ['header'=>'Pass sanitaires'],
  ['title'=>'En attente','url'=>'pass-list?_s=en-attente'],
  ['title'=>'Pass valides','url'=>'pass-list?_s=valide'],
  ['title'=>'Pass annulés','url'=>'pass-list?_s=annule'],
]
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <img src="<?=$app_root?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Espace Voyageur</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?="{$app_root}res/photo/{$_user['photo']}"?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?="{$_user['prenom']} {$_user['nom']}"?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Recherche" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
          foreach($_menu as $item):
            $item['url']=$item['url']??'#';
            $item['children']=$item['children']??[];
            if($item['header']??null):
              echo '<li class="nav-header">'.$item['header'].'</li>';
              continue;
            endif;
          ?>
          <li class="nav-item">
            <a href="<?=$item['url']?>" class="nav-link">
              <i class="nav-icon fas fa-angle-right"></i>
              <p>
                <?=$item['title']?>
                <?=$item['children']?'<i class="right fas fa-angle-left"></i>':''?>
              </p>
            </a>
            <?php if($item['children']):?>
              <ul class="nav nav-treeview">
                <?php foreach($item['children'] as $item_):?>
                <li class="nav-item">
                  <a href="<?=$item_['url']?>" class="nav-link">
                    <i class="fa fa-angle-right nav-icon"></i>
                    <p><?=$item_['title']?></p>
                  </a>
                </li>
                <?php endforeach?>
              </ul>
            <?php endif?>
          </li>
          <?php endforeach?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
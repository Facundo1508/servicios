<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= Configure::read('App.title') ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <?= $this->fetch('tb_actions') ?>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'btn btn-default']) ?></a></li></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Loguot'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Todos los servicios'), ['controller' => 'Userservicios', 'action' => 'todos'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Mis Servicios'), ['controller' => 'Userservicios', 'action' => 'index'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Nosotros'), ['controller' => 'Pages', 'action' => 'display', 'contacto'], ['class' => 'btn btn-default']) ?></a></li>
                </ul>
                
                
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
            <?php 
                
                
                echo $this->fetch('tb_sidebar'); 
                
            ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><?= $this->request->controller; ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');

<?php
/* Smarty version 4.4.1, created on 2024-03-20 01:55:39
  from 'C:\wamp64\www\sinapsis\wp-content\plugins\instructor_wp\public\partials\instructor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fa421befcac9_20248227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be49a1bc363a451cb3726b3c4723825ae29999fa' => 
    array (
      0 => 'C:\\wamp64\\www\\sinapsis\\wp-content\\plugins\\instructor_wp\\public\\partials\\instructor.tpl',
      1 => 1710899735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa421befcac9_20248227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\sinapsis\\wp-content\\plugins\\profile_wp\\public\\assets\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="row box-blue-instructor mt-5 mb-5">

    <div class="col-8">
        <h2 style="color: white;"><?php echo $_smarty_tpl->tpl_vars['instructor']->value->response->nombre;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['instructor']->value->response->especialidad;?>
</p>
        <p>+ 10 años de experiencia en Medicina interna</p>
    </div>
    
    <div class="col-7 box-white-description shadow">
        <p><?php echo $_smarty_tpl->tpl_vars['instructor']->value->response->descripcion;?>
</p>
    </div>

    <div class="col-5" style="padding: 30px;">
        <div class="box-img-instructor">

        </div>
    </div>


</div>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cursos']->value) > 0) {?>
<br><br><br>
<div class="banner-courses-instructor mt-5">

    <div class="row">
        <div class="col-6 pt-4 pl-2">
            <h3 style="color: white; padding-left: 20px;">Descubre sus cursos</h3>
        </div>
        <div class="col-6">
            <!-- <a href=""><button type="button">Ver todos los cursos</button></a> -->
        </div>

        <div class="col-12" style="padding : 30px;">
            <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'curso');
$_smarty_tpl->tpl_vars['curso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->do_else = false;
?>
            <div class="col-4">
                <div class="card shadow">
                    <div class="box-img-courses">
                        <div class="img-courses" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['curso']->value->imagen;?>
);"></div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p><i class="fa-solid fa-users"></i> + <?php echo $_smarty_tpl->tpl_vars['curso']->value->estudiantes;?>
 Estudiantes</p>
                            </div>
                            <div class="col-6">
                                <p><i class="fa-regular fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['curso']->value->duracion;?>
</p>
                            </div>
                        </div>
                        
                        <h5 class="card-title mb-3"><?php echo $_smarty_tpl->tpl_vars['curso']->value->nombre;?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['curso']->value->descripcion_corta;?>
</p>
                        <a href="/curso/?curso=<?php echo $_smarty_tpl->tpl_vars['curso']->value->id;?>
"><button style="width: 100%;" type="button" class="more-info-course btn btn-primary">Más información  <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        </div>

    </div>

</div>

<?php }?>


<?php }
}

<?php
/* Smarty version 4.4.1, created on 2024-03-19 18:36:37
  from 'C:\wamp64\www\sinapsis\wp-content\plugins\instructor_wp\public\partials\instructores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65f9db357e6411_96063468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6148612fcd992f924177adf8be1bfcf65a87d467' => 
    array (
      0 => 'C:\\wamp64\\www\\sinapsis\\wp-content\\plugins\\instructor_wp\\public\\partials\\instructores.tpl',
      1 => 1710873389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f9db357e6411_96063468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-12 text-center">
    <h3 style="color: #445AFF;">Instructores</h3>
    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
</div>

<?php $_smarty_tpl->_assignInScope('c', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instructores']->value->response, 'instructor');
$_smarty_tpl->tpl_vars['instructor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['instructor']->value) {
$_smarty_tpl->tpl_vars['instructor']->do_else = false;
?>

<?php if ($_smarty_tpl->tpl_vars['c']->value%2 == 0) {?>
    <div class=" row mb-5 shadow box-info-instructor">
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h3><?php echo $_smarty_tpl->tpl_vars['instructor']->value->nombre;?>
</h3>
                </div>
                <div class="col-6 text-end">
                    Dr. en Hospital Lorem Ipsum
                </div>
                <div class="col-12">
                    <p style="font-weight: bold;">+ 10 años de experiencia en el sector de la salud</p>
                </div>
                <div class="col-12 mb-4">
                    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
                </div>
                <div class="col-12">
                    <a href="/instructor/?id=<?php echo $_smarty_tpl->tpl_vars['instructor']->value->id;?>
"><button type="button">Descubre más sobre Alena Saris <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="photo-instructor-box">
                <img src="" alt="">
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['c']->value%2 != 0) {?>

<div class=" row mb-5 shadow box-info-instructor">
        <div class="col-4">
            <div class="photo-instructor-box">
                <img src="" alt="">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h3><?php echo $_smarty_tpl->tpl_vars['instructor']->value->nombre;?>
</h3>
                </div>
                <div class="col-6 text-end">
                    Dr. en Hospital Lorem Ipsum
                </div>
                <div class="col-12">
                    <p style="font-weight: bold;">+ 10 años de experiencia en el sector de la salud</p>
                </div>
                <div class="col-12 mb-4">
                    <p>Lorem ipsum dolor sit amet consectetur. Dolor mi placerat ullamcorper amet tempor pharetra sodales eget leo. Risus.</p>
                </div>
                <div class="col-12">
                    <a href="/instructor/?id=<?php echo $_smarty_tpl->tpl_vars['instructor']->value->id;?>
"><button type="button">Descubre más sobre Alena Saris <i style="margin-left: 10px;" class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>


<?php }?>


<?php $_smarty_tpl->_assignInScope('c', $_smarty_tpl->tpl_vars['c']->value+1);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



<?php }
}

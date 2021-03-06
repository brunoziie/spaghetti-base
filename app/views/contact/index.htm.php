<?php $html->script('modules/contact', array(), false, true); ?>

<div class="row">
  <div class="col-md-12">
  <h2>Contato</h2>
  
  <?php echo $form->create('/contato', array('id' => 'form-contact', 'class' => 'form-horizontal')); ?>

  <?php echo $form->input('name', array(
    'label' => 'Nome', 
    'class' => 'form-control',
    'placeholder' => 'Digite seu nome',
  )); ?>

  <?php echo $form->input('email', array(
    'label' => 'Email', 
    'class' => 'form-control',
    'placeholder' => 'Digite um email válido',
  )); ?>

  <?php echo $form->input('phone', array(
    'label' => 'Fone', 
    'class' => 'form-control',
    'placeholder' => 'Só números',
    'alt' => 'phone', 
  )); ?>

  <?php echo $form->input('message', array(
    'label' => 'Mensagem', 
    'placeholder' => 'Escreva sua mensagem',
    'class' => 'form-control',
    'type' => 'textarea', 
  )); ?>

  <?php echo $form->input('born_in', array(
    'label' => 'Data de nascimento', 
    'class' => 'form-control',
    'placeholder' => 'dd/mm/aaaa',
    'alt' => 'date', 
  )); ?>

  <br>

  <?php echo $form->input(null, array(
    'label' => null, 
    'type' => 'submit', 
    'value' => 'Enviar Formulário',
    'class' => 'btn btn-lg btn-primary', 
  )); ?>
  
  <?php echo $form->close(); ?>
  </div>
</div>
<?php

  element_set_attributes($element, array('id', 'name', 'cols', 'rows','maxlength'));
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    drupal_add_library('system', 'drupal.textarea');
    $wrapper_attributes['class'][] = 'resizable';
  }
?>
<div <?php print drupal_attributes($wrapper_attributes);?> >
    <textarea   <?php print(drupal_attributes($element['#attributes'])); ?>><?php print check_plain($element['#value']);?></textarea>
</div>
<?php
// conlole log
  function console_log($args)
  {
    ?>
    <?php $js_array = json_encode($args);?>
    <?php $array_methods = json_encode(get_class_methods($args)); ?>
      <script type='text/javascript'>
          console.log(<?php echo $js_array; ?>);
          console.log(<?php echo $array_methods; ?>);
      </script>
    <?php
  }
?>


<?php get_header(); ?>



<?php get_footer(); ?>

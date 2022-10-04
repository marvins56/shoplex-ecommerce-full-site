<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if (count($errors) > 0) : ?>

  <div class="error">

  	<?php foreach ($errors as $error) : ?>

<script>
			swal({
  title: "ERROR!!",
  text: "<?php echo $error ?>
",
  icon: "error",
  button: "Dismiss",
});
</script>


  	<?php endforeach ?>

  </div>

<?php  endif ?>



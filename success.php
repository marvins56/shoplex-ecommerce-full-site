<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if (count($success) > 0) : ?>

  <div class="success">

  	<?php foreach ($success as $successes) : ?>

<script>
			swal({
  title: "SUCCESSFULL!!",
  text: "<?php echo $successes ?>
",
  icon: "success",
  button: "Dismiss",
});
</script>


  	<?php endforeach ?>

  </div>

<?php  endif ?>

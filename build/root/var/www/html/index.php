<h1>HTTPENV</h1>
<h2>Host</h2>
<?php echo gethostname();?>
<h2>Env</h2>
<pre>
<?php echo var_export($_SERVER, true); ?>
</pre>
<!--
<pre>
<?php echo print_r($_SERVER, true); ?>

<?php var_dump($_SERVER); ?>
</pre>
-->

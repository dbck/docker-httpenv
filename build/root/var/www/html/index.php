<h1>HTTPENV</h1>
<h2>Host</h2>
<? echo gethostname();?>
<h2>Env</h2>
<pre>
<? echo var_export($_SERVER, true); ?>
</pre>
<!--
<pre>
<? echo print_r($_SERVER, true); ?>

<? var_dump($_SERVER); ?>
</pre>
-->

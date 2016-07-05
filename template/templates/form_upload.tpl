{include file='header.tpl'}{strip}
        <div class="container">
            <script type="text/javascript">
                function onSubmitButton(){
                    document.getElementById("submitButtonDiv").style.display = "none";	
                    document.getElementById("progressBar").style.display = "block";		
                }
            </script>

	<ul class="list-group">
			
	<div class="jumbotron" align="center">		
<form class="form-horizontal" action="index.php?action=upload" method="post" enctype="multipart/form-data" onsubmit="return onSubmitButton()">	
  <li class="list-group-item">
      <div class="form-group" style="padding: 0px 300px 0px;">
    <label>{t 1=$max_file_size}Ficheiro (Tamanho Maximo: %1){/t}:</label>
    <input type="file" class="filestyle" name="file" id="input09">
    <!--<p class="help-block">Example block-level help text here.</p>-->
  </div>
	</li>
  <li class="list-group-item">  <div class="form-group">
    <label for="examplePassword1">Password</label>
    <input type="password" class="form-control input-sm" name="password" id="examplePassword1" placeholder="Password" style="max-width: 400px;">
  </div></li>
  <li class="list-group-item" >
    <div class="form-group">
    <label for="example1">{t}Visibilidade Do Ficheiro{/t}</label><br>
		<select name="visibility" id="example1" style="color: #A29999;width: 200px;" required='required'>
		<option value="public">{t}Publico{/t}</option>
		<option value="private">{t}Privado{/t}</option>
	</select>
  </div>
  </li>
    <li class="list-group-item">
	 <button type="submit" class="btn btn-primary" name="submit" id="submitButton" style="width: 300px;"><span class="glyphicon glyphicon-send" aria-hidden="true"> </span>   &nbsp;Enviar</button>
	</li>

                  <div id="progressBar" style="display:none">
                    {html_image file="{$smarty.const.DIR_TEMPLATE_IMGS}/progress_bar.gif"}
                </div>
				</form>
</div>
</ul>
			
	<script type="text/javascript">
	$('#input09').filestyle({
		buttonText : '  Escolher',
		buttonName : 'btn-primary',
		'placeholder' : 'Escolhe um arquivo...'
	});
</script>
        </div>
{/strip}{include file='footer.tpl'}

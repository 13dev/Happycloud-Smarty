{include file='header.tpl'}{strip}
        <div class="container">
			<div class="jumbotron" align="center">	
            <h2>{t}Arquivo carregado com sucesso!{/t}</h2><hr>
            <p>{t}Detalhes do arquivo{/t}:</p>
			<h4>
			
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tamanho</th>
        <th>Password</th>
		<th>Visibilidade</th>
		<th>Download</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{$file_name}</td>
        <td>{$file_weight}</td>
		{if empty($file_password) or is_null($file_password) or $file_password==""}
        <td>O Arquivo Não Tem Password!</td>
		{else}
		<td>Password: {$file_password}</td>
		{/if}
		<td>{$file_visibility}</td>
		<td><a href="{$link_file}" class="btn btn-success" class="js-copytextarea" id="link" value="{$link_file}"> Download</a></td>
      </tr>
   
    </tbody>
  </table>
    <script>
var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});
    </script>
  <h3><button class="btn btn-primary" class="js-textareacopybtn">COPIAR LINK</button></h3>

        </div>
	</div>
{/strip}{include file='footer.tpl'}

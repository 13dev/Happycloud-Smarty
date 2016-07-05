{include file='header.tpl'}{strip}
{if !isset($error)}
        <div class="container">
			<div class="jumbotron" align="center">

			<h2>USERS</h2><hr>
			 <table class="table table-striped">
				<thead>
				  <tr>
					<th>ID</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
					<th>EDITAR</th>
				  </tr>
				</thead>
				<tbody>
		
					{foreach from=$rowsu item=row}
<div class="modal fade" id="basicModal{$row.idu}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">Mudar Password</h4>
            </div>
            <div class="modal-body">
                <h3>- Nome: {$row.username} -</h3>
				<p align="left">Nova Password:</p>
				 <form class="form-horizontal" action="index.php?action=acp_users&admin_action=acp&edituser=change_password&username={$row.username}" method="post" enctype="multipart/form-data">
				<input type="password" class="form-control" placeholder="Nova Password" name="npass" required='required' minlength=5>
				
				
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal"  >Sair</button>
                <button type="submit" class="btn btn-primary">Mudar Password</button>
				</form>
        </div>
    </div>
  </div>
</div>
					<tr>
					<td>{$row.idu}</td>
					<td>{$row.username}</td>
					<td>******</td>
					<td>
	<div class="btn-group">
		<a class="btn btn-info btn-sm" href="index.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> {t}Editar{/t}</a>
		<a class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a  href="&username={$row.username}" data-toggle="modal" data-target="#basicModal{$row.idu}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>  {t}Mudar Password{/t}</a></li>
			<li><a  href="index.php?action=acp_users&admin_action=acp&edituser=delete&username={$row.username}&idu={$row.idu}" onclick="return confirm('{t}Tem certeza de que quer apagar esta conta e todos os arquivos associados a ela? Cuidado! Esta operação é irreversível!{/t}')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>  {t}Eliminar{/t}</a></li>
		</ul>
	</div>
					
					</td>
					</tr>
				{/foreach}
				
				

				  
				</tbody>
			  </table>
			</div>
        </div>
{/if}
{/strip}{include file='footer.tpl'}

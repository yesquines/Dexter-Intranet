<?php
require('header.php');
?>    
	<div id="grid_content">
		<div class="main_content">
			<?php require('menu.php'); ?>
			<h1>Dados do cliente</h1>
			<form id="cliente">
				<div class="fleft">
					<p>
						<label>Empresa: </label><input type="text" size="30" value="4Linux Software e Com&eacute;rcio LTDA."/>
					</p>
					<p>
						<label>Telefone: </label><input type="text" size="30" value="(11) 2125-4747" />
					</p>
					<p>
						<label>Endere&ccedil;o: </label><input type="text" size="30"  value="Rua Teixeira da Silva, 660" />
					</p>
					<p>
						<label>CEP: </label><input type="text" size="30" value="04002-033"/>
					</p>
				</div>
				<div class="fright">
					<p>
						<label>Respons&aacute;vel: </label><input type="text" size="30" value="Zobervaldo" />
					</p>
					<p>
						<label>Bairro: </label><input type="text" size="30" value="Paraiso" />
					</p>
					<p>
						<label>Cidade: </label><input type="text" size="30" value="Sao Paulo"/>
					</p>
					<p>
						<label>Estado: </label><input type="text" size="30"  value="SP"/>
					</p>
				</div>
				<h1>Informa&ccedil;&otilde;es</h1>
				<div id="dadoscliente">
					<ul>
						<li><a href="#tabs-2">Coletas</a></li>
						<li><a href="#tabs-1">Hist&oacute;rico</a></li>
					</ul>
					<div id="tabs-1" class="notes">
						<p> Coleta N&#176; 6789 realizada em 12/12/2011 as 15h17</p>
						<p> Coleta N&#176; 6789 realizada em 12/12/2011 as 15h17</p>
						<p> Coleta N&#176; 6789 realizada em 12/12/2011 as 15h17</p>
						<p> Coleta N&#176; 6789 realizada em 12/12/2011 as 15h17</p>
					</div>
					<div id="tabs-2">
						<table cellpadding="0" cellspacing="0" border="0" class="tabela">
							<thead>
								<tr>
									<th>Pedido</th>
									<th>Coleta</th>
									<th>Entrega</th>
									<th>Observa&ccedil;&atilde;o</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>95872</td>
									<td>Apostilas</td>
									<td>Entregue - 03/04</td>
									<td> - </td>
								</tr>
								<tr>
									<td>95872</td>
									<td>Apostilas</td>
									<td>Entregue - 03/04</td>
									<td> - </td>
								</tr>
								<tr>
									<td>95872</td>
									<td>Apostilas</td>
									<td>Entregue - 03/04</td>
									<td> - </td>
								</tr>
							</tbody>
						</table>
						<input type="submit" value="Nova Coleta" />
					</div>
				</div>
				<br />
			</form>
		</div>
		
<?php require('sidebar.php'); ?>
</div>

<?php
require('footer.php');
?>

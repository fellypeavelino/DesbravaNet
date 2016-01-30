<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h1>Produtos</h1>
		<table class="table">
			<?php foreach($produtos as $produto) : ?>
				<tr>
					<td><?php echo $produto["nome"]?></td>
					<td><?php echo numeroEmReais($produto["valor"]) ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
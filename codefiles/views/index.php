<div style="margin-top: 40px; ">
	<a style="text-decoration: none" href="create"><button style="height: 5rem;" type="submit"
	   class="btn btn-success btn-lg btn-block">Vytvoriť dielo</button></a>
</div>

<div style="margin-top: 80px;  margin-bottom: 40px;">
	<h3 style="margin-top: 20px; margin-bottom: 20px;"><?php echo $title ?></h3>
	<table class="table table-hover">
		<thead>
		<tr style="background-color: #2C3E50; color: white;">
			<th scope="col">Názov diela</th>
			<th scope="col">Typ diela</th>
			<th scope="col">Žáner Diela</th>
			<th scope="col">Účinkujúci</th>
			<th scope="col" type="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($shows as $show): ?>
		<tr class="table-default">
			<td style="vertical-align: middle"><?php echo $show['Nazov']; ?></td>
			<td style="vertical-align: middle"><?php echo $show['Typ']; ?></td>
			<td style="vertical-align: middle"><?php echo $show['Zaner']; ?></td>
			<td style="vertical-align: middle"><?php echo $show['Ucinkujuci']; ?></td>
			<td style="vertical-align: middle">
				<a href="<?php echo site_url('/shows/delete/'.$show['ID_KulturneDielo']); ?>">
					<button type="button" class="btn btn-outline-danger">Odstrániť</button>
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

<? include_once('views/common/header.php'); ?>
	<div class="container">
		<div class="row">
			<? if (empty($books)): ?>
				<h2> Корзина пуста. Добавьте товар в корзину. </h2>
			<? else: ?>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th> ID </th>
							<th> Название </th>
							<th> Цена </th>
							<th> Количество </th>
							<th> Сумма </th>
						</tr>
					</thead>
					<tbody>
						<? foreach ($books as $book): ?>
							<tr> 
								<td> <?= $book['book_id']; ?></td>
								<td> <?= $book['book_name']; ?></td>
								<td> <?= $book['book_price']; ?></td>
								<td> 
									<input type="number" value="<?= $book['book_quantity']; ?>" min="1"/>
								</td>
								<td> <?= $book['book_price'] * $book['book_quantity']; ?></td>
							</tr>
						<? endforeach; ?>
					</tbody>
				</table>
				<div class="row">
					<button class="btn btn-primary">
						Заказать
					</button>
				</div>
			<? endif; ?>
		</div>
	</div>
<? include_once('views/common/footer.php'); ?>
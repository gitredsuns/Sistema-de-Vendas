<h1>usuarios</h1>

<div style="padding:30px">

	<table style="width:100%" border="1">
	    <tr>
	        <th>Id</th>
	        <th>Nome</th>
	        <th>Email</th>
	        <th></th>
	    </tr>
	 
	    <?php foreach ($users as $post): ?>
	    <tr>
	        <td><?php echo $post['Usuario']['id']; ?></td>
	        <td>
	            <?php echo $this->Html->link($post['Usuario']['nome'], '/posts/view/'.$post['Usuario']['id']);?>
	        </td>
	        <td>
	        	<?php echo $this->Html->link($post['Usuario']['email'], '/posts/view/'.$post['Usuario']['id']);?>
	        </td>
	        <td>
	        <?php echo $this->Html->link(
	                'Delete',
	                "/usuarios/deletar/{$post['Usuario']['id']}",
	                null,
	                'Are you sure?'
	            )?>
	            <?php echo $this->Html->link('Edit', '/posts/edit/'.$post['Usuario']['id']);?>
	        </td>
	    </tr>
	    <?php endforeach; ?>
	</table>

</div>

</body>
</html>
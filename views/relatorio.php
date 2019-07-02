<h1>Relatório</h1>

<table border="1" width="500">
    <tr>
        <th>Nome</th>
        <th>Qtd.</th>
        <th>Qtd. min.</th>
    </tr>
    <?php foreach ($list as $item):?>
        <tr>
             <td><?php echo $item['name']; ?></td>
             <td><?php echo $item['quantity']; ?></td>
             <td><?php echo $item['min_quantity']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
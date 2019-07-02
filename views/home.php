    <br>
    <form method="get">
        <div class="row padMar">
            <div class="col padMar">
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                        <input class="form-control autocomplete" type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Buscar por Codigo de barras ou Nome do produto">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="submit">
                                    <i class="fa fa-search">

                                    </i>
                                </button>
                            </div>
                </div>
            </div>
        </div>
    </form>
<table border="1" width="100%">
    <tr>
        <th>Cód.</th>
        <th>Nome</th>
        <th>Preço Unit</th>
        <th>Qtd.</th>
        <th>Açoes</th>
    </tr>
    <?php foreach ($list as $item): ?>
        <tr>
            <td><?php echo $item['cod']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id'];?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<script type="text/javascript">
document.getElementById("busca").focus();
</script>
<br><br>
<div class="container">
    <form id="contactForm" method="post" class="form">
        <div class="form-row text-left" style="padding: 0px;">
            <div class="col"></div>
            <div class="col-md-6" id="message">
                <fieldset id="field">
                    <legend id="legend">Adicionar Produto</legend>
                </fieldset>
                <div class="form-group has-feedback">
                    <label for="cod">Codigo de barras</label>
                <input type="text" id="txt" name="cod"  class="form-control d-lg-flex align-items-lg-end">
            </div>
                <div class="form-group has-feedback">
                    <label for="name">Nome do Produto</label>
                    <input class="form-control inp" type="text" id="name" name="name" required style="font-size: 21px;height: 45.5px;" />
                </div>
            <div class="form-group has-feedback">
                <label for="price">Preço</label>
                <input class="form-control inp" type="text" name="price" required style="font-size: 21px;" />
            </div>
            <div class="form-group has-feedback">
                <label for="quantity">Quantidade</label>
                <input class="form-control inp" type="number" name="quantity" required style="font-size: 21px;" />
            </div>
            <div class="form-group has-feedback">
                <label for="min_quantity">Quantidade Minima</label>
                <input class="form-control inp" type="number" name="min_quantity" required />
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Salvar  <i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <hr />
        </div>
        <div class="col"></div>
</div>
</form>
</div>
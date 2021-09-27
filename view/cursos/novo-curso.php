<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/salvar-curso" method="post" class="container">
        <div class="form-group">
            <label for="curso" class="label-control">Novo Curso</label>
            <input type="text" name="descricao" class="form-control" placeholder="Digite o curso desejado" required/>
            <br/>
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>
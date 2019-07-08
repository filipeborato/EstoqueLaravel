<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
                <td><?= $p->nome ?></td>
                <!-- outras colunas omitidas -->
                <td>
                    <a href="/produtos/mostra?id=<?= $p->id ?>">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>
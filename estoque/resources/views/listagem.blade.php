@extends('principal')
@section('conteudo')
<div class="a">
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover " style="text-align: center;">
        <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
                <td><?= $p->nome ?></td>
                <!-- outras colunas omitidas -->
                <td>
                    <a href="/produtos/mostra/<?= $p->id ?>">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
@stop
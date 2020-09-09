<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>

<body>

    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>

            <!--     <input type="submit" value="Cadastrar" /> -->
        </fieldset>
    </form>

    <label>
        Descrição (Opcional):
        <textarea name="descricao"></textarea>
    </label>


    <label>
        Prazo (Opcional):
        <input type="text" name="prazo" />
    </label>

    <fieldset>
        <legend>Prioridade:</legend>
        <label>
            <input type="radio" name="prioridade" value="baixa" checked /> Baixa
            <input type="radio" name="prioridade" value="media" checked /> Média
            <input type="radio" name="prioridade" value="alta" checked /> Alta
        </label>
    </fieldset>
    <label>
        Tarefa Concluída:

        <input type="checkbox" name="concluida" value="sim" />

    </label>
    <input type="submit" value="Cadastrar" />



    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefas) : ?>
            <tr>
                <td><?php echo $tarefas; ?>
                </td>
            </tr>


        <?php endforeach; ?>


    </table>
</body>

</html>
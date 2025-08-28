<?php include('layouts/header.php'); ?>

<div class="container mt-5">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['birthdate'])) {

    $data_nascimento = $_POST['birthdate'];
    $signos = simplexml_load_file(__DIR__ . "/assets/signos.xml") or die("Erro ao abrir XML");

    $dataNascimento = DateTime::createFromFormat("Y-m-d", $data_nascimento);

    if ($dataNascimento) {
        $resultado = "<h2 class='text-center text-danger'>Signo não encontrado</h2>";

        $elementos = [
            "fogo" => ["áries","aries","leão","sagitário","sagitario"],
            "terra" => ["touro","virgem","capricórnio","capricornio"],
            "ar" => ["gêmeos","gemeos","libra","aquário","aquario"],
            "agua" => ["câncer","cancer","escorpião","escorpiao","peixes"]
        ];

        foreach ($signos->signo as $signo) {
            $inicio = DateTime::createFromFormat("d/m", (string)$signo->dataInicio);
            $fim = DateTime::createFromFormat("d/m", (string)$signo->dataFim);

            $ano = $dataNascimento->format("Y");
            $inicio->setDate($ano, $inicio->format("m"), $inicio->format("d"));
            $fim->setDate($ano, $fim->format("m"), $fim->format("d"));

            // Ajuste para signos que atravessam o ano
            if ($fim < $inicio) { $fim->modify("+1 year"); }

            if ($dataNascimento >= $inicio && $dataNascimento <= $fim) {
                $nome = strtolower((string)$signo->nome);
                $classe = "fogo";

                foreach ($elementos as $elem => $lista) {
                    if (in_array($nome, $lista)) { $classe = $elem; break; }
                }

                $resultado = "
                    <div class='card shadow p-4 text-center $classe mx-auto' style='max-width: 400px;'>
                        <h2>{$signo->nome}</h2>
                        <img src='{$signo->imagem}' alt='{$signo->nome}' class='signo-img'>
                        <p>{$signo->descricao}</p>
                    </div>
                ";
                break;
            }
        }

        echo $resultado;

    } else {
        echo "<p class='text-danger text-center'>Formato de data inválido.</p>";
    }

} else {
    echo "<p class='text-danger text-center'>Nenhuma data de nascimento enviada.</p>";
}
?>

<div class="text-center mt-3">
    <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>
</div>
</body>
</html>

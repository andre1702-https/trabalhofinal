
document.addEventListener("DOMContentLoaded", () => {

    // Elementos da página
    const formulario = document.getElementById("formulario-avaliacao");
    const grade = document.getElementById("avaliacoes-grid");
    const botaoVerMais = document.getElementById("btn-ver-mais");
    const contador = document.getElementById("contador-avaliacoes");

    const descricao = document.getElementById("descricao");
    const contadorCaracteres = document.getElementById("contador-caracteres");

    const mensagem = document.getElementById("mensagem-formulario");
    const ajudaNota = document.getElementById("ajuda-nota");

    // Elementos do seletor de estrelas
    const estrelas = document.querySelectorAll(
        ".seletor-estrelas input"
    );

    const etiquetasEstrelas = document.querySelectorAll(
        ".seletor-estrelas label"
    );

    const nomesNotas = [
        "Selecione de 1 a 5 estrelas.",
        "1 estrela: experiência ruim.",
        "2 estrelas: experiência regular.",
        "3 estrelas: experiência boa.",
        "4 estrelas: experiência muito boa.",
        "5 estrelas: experiência excelente."
    ];

    // Atualiza a aparência das estrelas
    function atualizarEstrelas(nota) {
        etiquetasEstrelas.forEach((etiqueta, indice) => {
            etiqueta.classList.toggle(
                "selecionada",
                indice < nota
            );
        });

        ajudaNota.textContent = nomesNotas[nota] || nomesNotas[0];
    }

    estrelas.forEach((estrela) => {
        estrela.addEventListener("change", () => {
            atualizarEstrelas(Number(estrela.value));
        });

        // Permite pré-visualizar a nota com o teclado
        estrela.addEventListener("focus", () => {
            etiquetasEstrelas.forEach((etiqueta, indice) => {
                etiqueta.classList.toggle(
                    "pre-visualizada",
                    indice < Number(estrela.value)
                );
            });
        });

        estrela.addEventListener("blur", () => {
            etiquetasEstrelas.forEach((etiqueta) => {
                etiqueta.classList.remove("pre-visualizada");
            });
        });
    });

    // Contagem de caracteres da descrição
    descricao.addEventListener("input", () => {
        contadorCaracteres.textContent =
            `${descricao.value.length}/700 caracteres`;
    });

    // Expansão dos cartões de avaliações
    const todosCartoes = Array.from(
        grade.querySelectorAll(".avaliacao-card")
    );

    const quantidadeInicial = 2;
    let listaExpandida = false;

    function atualizarLista() {
        todosCartoes.forEach((cartao, indice) => {
            cartao.hidden =
                !listaExpandida && indice >= quantidadeInicial;
        });

        botaoVerMais.hidden =
            todosCartoes.length <= quantidadeInicial;

        botaoVerMais.innerHTML = listaExpandida
            ? 'Ver menos <span aria-hidden="true">↑</span>'
            : 'Ver mais avaliações <span aria-hidden="true">↓</span>';

        contador.textContent =
            `${todosCartoes.length} experiências`;
    }

    botaoVerMais.addEventListener("click", () => {
        listaExpandida = !listaExpandida;
        atualizarLista();
    });

    // Atualiza a contagem inicial e mostra apenas dois cartões
    atualizarLista();

    // Formulário de demonstração
    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();

        if (!formulario.reportValidity()) {
            return;
        }

        const dados = new FormData(formulario);

        const nome = dados.get("nome").trim();
        const local = dados.get("local");
        const nota = Number(dados.get("nota"));
        const texto = dados.get("descricao").trim();

        if (!nome || !local || !texto || nota < 1 || nota > 5) {
            mensagem.textContent =
                "Preencha todos os campos corretamente.";
            return;
        }

        // Esta versão não envia nem salva os dados.
        mensagem.textContent =
            "Formulário validado! Esta é uma demonstração: " +
            "sua avaliação ainda não foi publicada nem salva. " +
            "Conecte um backend para concluir o envio.";

        mensagem.scrollIntoView({
            behavior: "smooth",
            block: "nearest"
        });
    });

});

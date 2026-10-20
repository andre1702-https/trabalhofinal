
document.addEventListener("DOMContentLoaded", () => {

    // Seleciona todos os carrosséis da página
    const carrosseis = document.querySelectorAll(".carrossel");

    carrosseis.forEach((carrossel) => {

        const slides = carrossel.querySelectorAll(".slide");
        const indicadores = carrossel.querySelectorAll(".indicador");

        const anterior = carrossel.querySelector(".seta-anterior");
        const proxima = carrossel.querySelector(".seta-proxima");

        // Índice da imagem que está sendo exibida
        let indiceAtual = 0;

        // Exibe uma imagem e atualiza os indicadores
        function mostrarSlide(indice) {

            // Faz o índice voltar ao início ou ao fim
            if (indice >= slides.length) {
                indiceAtual = 0;
            } else if (indice < 0) {
                indiceAtual = slides.length - 1;
            } else {
                indiceAtual = indice;
            }

            // Atualiza as imagens
            slides.forEach((slide, i) => {
                slide.classList.toggle(
                    "ativo",
                    i === indiceAtual
                );
            });

            // Atualiza os indicadores inferiores
            indicadores.forEach((indicador, i) => {
                const ativo = i === indiceAtual;

                indicador.classList.toggle("ativo", ativo);

                if (ativo) {
                    indicador.setAttribute("aria-current", "true");
                } else {
                    indicador.removeAttribute("aria-current");
                }
            });
        }

        // Botão para voltar uma imagem
        anterior.addEventListener("click", () => {
            mostrarSlide(indiceAtual - 1);
        });

        // Botão para avançar uma imagem
        proxima.addEventListener("click", () => {
            mostrarSlide(indiceAtual + 1);
        });

        // Permite escolher uma imagem pelos indicadores
        indicadores.forEach((indicador, indice) => {
            indicador.addEventListener("click", () => {
                mostrarSlide(indice);
            });
        });

        // Garante que o carrossel comece na primeira imagem
        mostrarSlide(0);
    });

});

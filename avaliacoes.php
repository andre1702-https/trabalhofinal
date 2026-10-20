<?php require_once __DIR__ . '/includes/cabecalho.php'; ?>

<main>
    <!-- APRESENTAÇÃO -->
        <section class="avaliacoes-hero">

            <span class="subtitulo">HISTÓRIAS QUE INSPIRAM</span>

            <h1>Avaliações</h1>

            <p>
                Cada estadia deixa uma lembrança.
                Conheça as experiências de quem já encontrou
                seu momento de tranquilidade na Montis.
            </p>

            <a href="#lista-avaliacoes" class="link-elegante">
                Conhecer as experiências
                <span aria-hidden="true">↓</span>
            </a>

        </section>

        <!-- RESUMO DAS AVALIAÇÕES -->
        <section class="resumo-avaliacoes"
            aria-label="Resumo das avaliações">

            <div class="resumo-texto">
                <span class="subtitulo">OPINIÕES QUE IMPORTAM</span>
                <h2>A experiência vai além da hospedagem.</h2>
                <p>
                    Seu feedback nos ajuda a valorizar cada detalhe
                    e a tornar cada experiência ainda mais especial.
                </p>
            </div>

            <div class="resumo-destaque">
                <span class="resumo-icone" aria-hidden="true">✳</span>
                <p>Momentos únicos começam com boas experiências.</p>
            </div>

        </section>

        <!-- LISTA DE AVALIAÇÕES -->
        <section class="lista-avaliacoes" id="lista-avaliacoes">

            <div class="avaliacoes-cabecalho">
                <div>
                    <span class="subtitulo">RELATOS DE HÓSPEDES</span>
                    <h2>Experiências compartilhadas.</h2>
                </div>

                <span class="contador-avaliacoes"
                    id="contador-avaliacoes">
                    4 experiências
                </span>
            </div>

            <div class="avaliacoes-grid" id="avaliacoes-grid">

                <!-- AVALIAÇÃO 1 -->
                <article class="avaliacao-card">

                    <div class="avaliacao-topo">
                        <div class="avatar" aria-hidden="true">M</div>

                        <div class="avaliacao-pessoa">
                            <h3>Mariana</h3>
                            <span>Experiência de hospedagem</span>
                        </div>

                        <span class="avaliacao-selo"
                            aria-label="Avaliação ilustrativa">✳</span>
                    </div>

                    <div class="estrelas" aria-label="5 de 5 estrelas">
                        ★★★★★
                    </div>

                    <p class="avaliacao-local">
                        Refúgio da Serra
                    </p>

                    <p class="avaliacao-descricao">
                        Um exemplo de avaliação: um lugar tranquilo,
                        com uma atmosfera acolhedora e perfeito para
                        fazer uma pausa na rotina.
                    </p>

                    <span class="avaliacao-data">Exemplo demonstrativo</span>

                </article>

                <!-- AVALIAÇÃO 2 -->
                <article class="avaliacao-card">

                    <div class="avaliacao-topo">
                        <div class="avatar" aria-hidden="true">L</div>

                        <div class="avaliacao-pessoa">
                            <h3>Lucas</h3>
                            <span>Experiência de hospedagem</span>
                        </div>

                        <span class="avaliacao-selo"
                            aria-label="Avaliação ilustrativa">✳</span>
                    </div>

                    <div class="estrelas" aria-label="5 de 5 estrelas">
                        ★★★★★
                    </div>

                    <p class="avaliacao-local">
                        Vale dos Sonhos
                    </p>

                    <p class="avaliacao-descricao">
                        Um exemplo de relato: o contato com a natureza
                        e o ambiente aconchegante tornam a estadia
                        uma ótima oportunidade para desacelerar.
                    </p>

                    <span class="avaliacao-data">Exemplo demonstrativo</span>

                </article>

                <!-- AVALIAÇÃO 3 -->
                <article class="avaliacao-card">

                    <div class="avaliacao-topo">
                        <div class="avatar" aria-hidden="true">A</div>

                        <div class="avaliacao-pessoa">
                            <h3>Ana</h3>
                            <span>Experiência de hospedagem</span>
                        </div>

                        <span class="avaliacao-selo"
                            aria-label="Avaliação ilustrativa">✳</span>
                    </div>

                    <div class="estrelas" aria-label="4 de 5 estrelas">
                        ★★★★☆
                    </div>

                    <p class="avaliacao-local">
                        Bosque Nobre
                    </p>

                    <p class="avaliacao-descricao">
                        Um exemplo de comentário: uma proposta de
                        hospedagem charmosa, ideal para aproveitar
                        momentos tranquilos e apreciar os detalhes.
                    </p>

                    <span class="avaliacao-data">Exemplo demonstrativo</span>

                </article>

                <!-- AVALIAÇÃO 4 -->
                <article class="avaliacao-card">

                    <div class="avaliacao-topo">
                        <div class="avatar" aria-hidden="true">R</div>

                        <div class="avaliacao-pessoa">
                            <h3>Rafael</h3>
                            <span>Experiência de hospedagem</span>
                        </div>

                        <span class="avaliacao-selo"
                            aria-label="Avaliação ilustrativa">✳</span>
                    </div>

                    <div class="estrelas" aria-label="5 de 5 estrelas">
                        ★★★★★
                    </div>

                    <p class="avaliacao-local">
                        Villa Serena
                    </p>

                    <p class="avaliacao-descricao">
                        Um exemplo de depoimento: um cenário acolhedor
                        para aproveitar a companhia de pessoas especiais
                        e guardar boas lembranças.
                    </p>

                    <span class="avaliacao-data">Exemplo demonstrativo</span>

                </article>

            </div>

            <div class="ver-mais-container">
                <button class="btn-ver-mais" id="btn-ver-mais"
                    type="button">
                    Ver mais avaliações
                    <span aria-hidden="true">↓</span>
                </button>
            </div>

        </section>

        <!-- FORMULÁRIO DE AVALIAÇÃO -->
        <section class="fazer-avaliacao" id="fazer-avaliacao">

            <div class="formulario-intro">
                <span class="subtitulo">COMPARTILHE SUA EXPERIÊNCIA</span>

                <h2>Sua história também faz parte da Montis.</h2>

                <p>
                    Conte como foi sua experiência e ajude outras
                    pessoas a encontrar seu próximo refúgio.
                </p>

                <div class="formulario-detalhe">
                    <span aria-hidden="true">✳</span>
                    Cada detalhe da sua experiência importa.
                </div>
            </div>

            <form class="formulario-avaliacao" id="formulario-avaliacao">

                <div class="campo">
                    <label for="nome">Seu nome</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Como podemos chamar você?"
                        maxlength="60"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="local">Qual chalé você visitou?</label>

                    <select id="local" name="local" required>
                        <option value="">Selecione um chalé</option>
                        <option value="Refúgio da Serra">Refúgio da Serra</option>
                        <option value="Vale dos Sonhos">Vale dos Sonhos</option>
                        <option value="Bosque Nobre">Bosque Nobre</option>
                        <option value="Villa Serena">Villa Serena</option>
                    </select>
                </div>

                <fieldset class="campo campo-estrelas">
                    <legend>Como você avalia sua experiência?</legend>

                    <div class="seletor-estrelas">
                        <input type="radio" id="nota-1"
                            name="nota" value="1" required>
                        <label for="nota-1" title="1 estrela">★</label>

                        <input type="radio" id="nota-2"
                            name="nota" value="2">
                        <label for="nota-2" title="2 estrelas">★</label>

                        <input type="radio" id="nota-3"
                            name="nota" value="3">
                        <label for="nota-3" title="3 estrelas">★</label>

                        <input type="radio" id="nota-4"
                            name="nota" value="4">
                        <label for="nota-4" title="4 estrelas">★</label>

                        <input type="radio" id="nota-5"
                            name="nota" value="5">
                        <label for="nota-5" title="5 estrelas">★</label>
                    </div>

                    <span class="ajuda-nota" id="ajuda-nota">
                        Selecione de 1 a 5 estrelas.
                    </span>
                </fieldset>

                <div class="campo">
                    <label for="descricao">Conte como foi sua estadia</label>

                    <textarea
                        id="descricao"
                        name="descricao"
                        rows="5"
                        maxlength="700"
                        placeholder="Compartilhe os detalhes da sua experiência..."
                        required
                    ></textarea>

                    <span class="contador-caracteres"
                        id="contador-caracteres">
                        0/700 caracteres
                    </span>
                </div>

                <button type="submit" class="btn-enviar-avaliacao">
                    Enviar avaliação
                    <span aria-hidden="true">↗</span>
                </button>

                <p class="aviso-formulario">
                    Esta é uma demonstração. Para publicar avaliações
                    permanentemente, é necessário conectar um banco
                    de dados e um sistema de validação.
                </p>

                <p id="mensagem-formulario"
                    class="mensagem-formulario"
                    role="status"
                    aria-live="polite"></p>

            </form>

        </section>

        <!-- CHAMADA FINAL -->
        <section class="avaliacoes-final">

            <span class="subtitulo">SUA PRÓXIMA PAUSA ESPERA POR VOCÊ</span>

            <h2>Encontre o lugar da sua próxima história.</h2>

            <a href="chales.html" class="btn-reserva">
                Explorar chalés
                <span aria-hidden="true">↗</span>
            </a>

        </section>
</main>

<?php require_once __DIR__ . '/includes/rodape.php'; ?>

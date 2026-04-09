<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec Zona Leste - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="topo">
            <h1>Etec Zona Leste</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="ativo">Home</a></li>
                    <li><a href="formulario.php">Formulário</a></li>
                    <li><a href="quem-somos.php">Quem Somos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="banner">
            <h2>Bem-vindo ao site da Etec Zona Leste</h2>
            <p>Educação de qualidade e formação para o futuro.</p>
            <a href="formulario.php" class="botao">Faça seu cadastro</a>
        </section>

        <section class="carrossel">
            <div class="carrossel-container">
                <div class="slides" id="slides">
                    <div class="slide slide-logo">
                        <img src="imagens/imagem1.png" alt="Logo da Etec Zona Leste">
                    </div>

                    <div class="slide">
                        <img src="imagens/imagem2.jpg" alt="Fachada da Etec Zona Leste">
                    </div>

                    <div class="slide">
                        <img src="imagens/imagem3.jpg" alt="Vista da Etec Zona Leste">
                    </div>

                    <div class="slide slide-logo">
                        <img src="imagens/imagem4.jpg" alt="Imagem institucional da Etec Zona Leste">
                    </div>
                </div>

                <button class="seta seta-esquerda" onclick="voltarSlide()">&#10094;</button>
                <button class="seta seta-direita" onclick="avancarSlide()">&#10095;</button>
            </div>

            <div class="rolamento">
                <span class="item-rolamento ativa" onclick="irParaSlide(0)"></span>
                <span class="item-rolamento" onclick="irParaSlide(1)"></span>
                <span class="item-rolamento" onclick="irParaSlide(2)"></span>
                <span class="item-rolamento" onclick="irParaSlide(3)"></span>
            </div>
        </section>

        <section class="avisos">
            <h2>Avisos e Notícias</h2>
            <div class="grade-avisos">
                <div class="aviso-card">
                    <h3>Inscrições abertas</h3>
                    <p>As inscrições para novos alunos estão disponíveis. Consulte os prazos e documentos necessários.</p>
                </div>

                <div class="aviso-card">
                    <h3>Feira tecnológica</h3>
                    <p>A escola promoverá uma feira com apresentação de projetos desenvolvidos pelos estudantes.</p>
                </div>

                <div class="aviso-card">
                    <h3>Semana de provas</h3>
                    <p>Os alunos devem acompanhar o calendário escolar para verificar as datas das avaliações.</p>
                </div>
            </div>
        </section>

        <section class="conteudo">
            <h2>Nossos Destaques</h2>
            <div class="cards">
                <div class="card">
                    <h3>Cursos Técnicos</h3>
                    <p>Formação de qualidade para preparar o aluno para o mercado de trabalho.</p>
                </div>

                <div class="card">
                    <h3>Infraestrutura</h3>
                    <p>Ambiente com salas, laboratórios e espaços voltados ao aprendizado.</p>
                </div>

                <div class="card">
                    <h3>Oportunidades</h3>
                    <p>Ensino voltado ao crescimento acadêmico e profissional dos estudantes.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - Etec Zona Leste</p>
    </footer>

    <script>
        let slideAtual = 0;
        const slides = document.getElementById("slides");
        const rolamento = document.querySelectorAll(".item-rolamento");
        const totalSlides = rolamento.length;

        function mostrarSlide(indice) {
            slideAtual = indice;
            slides.style.transform = `translateX(-${slideAtual * 100}%)`;

            rolamento.forEach((item) => {
                item.classList.remove("ativa");
            });

            rolamento[slideAtual].classList.add("ativa");
        }

        function avancarSlide() {
            slideAtual++;
            if (slideAtual >= totalSlides) {
                slideAtual = 0;
            }
            mostrarSlide(slideAtual);
        }

        function voltarSlide() {
            slideAtual--;
            if (slideAtual < 0) {
                slideAtual = totalSlides - 1;
            }
            mostrarSlide(slideAtual);
        }

        function irParaSlide(indice) {
            mostrarSlide(indice);
        }

        setInterval(avancarSlide, 4000);
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
        rel="stylesheet">
    <title>Portfólio</title>
</head>
<body>
    <!-- <aside class="menu">
        <a href="#home">Home</a>
        <a href="#sobre">Sobre</a>
        <a href="#skills">Conhecimentos</a>
        <a href="#">Formações</a>
        <a href="#projects">Projetos</a>
        
    </aside> -->
    <section id="home">
        <h2>Felipe <strong>Alves</strong></h2>
        <p>
            Sou um desenvolvedor FullStack web e freelancer
        </p>
    </section>
    <section id="sobre">
        <h3>Quem sou</h3>
        <h4 id="know">Me conheça</h4>
        <h5>Quem Sou Eu?</h5>
        <p>      
            Eu sou  o Felipe, um desenvolvedor fullstack web residindo em são paulo e venho
            fazendo aplicações web há algum tempo. <br>Eu ajudo a converter ideias em softwares 
            úteis e significativos.Visite meu portfólio e vamos ver se  poderemos
            fazer seu próximo projeto.

        </p> <br>
        <hr>
        <h6>Nome:Felipe Evangelista Alves</h6>
        <h6>Nacionalidade:Brasil</h6>
        <h6>Telefone:+55 11 98016-7567</h6>
        <h6 >Email:felipe.alves1990a@gmail.com</h6>
        <a href="Currículo (4).docx" download="Currículo.docx">
        <button id="download">Baixar Meu Currículo</p>
        </a>
        <a href="#" id="mais">Mais!</a>
        
    </section>
    <section id="skills">
        <h3>Serviços</h3>
        <p> Serviços que normalmente ofereço para meu clientes </p>
        <div id="frontend">
            <img src="./imgs/logo-css3.svg" height="80px">
            <h5>Front-end</h5>
            <p>Eu uso html e css para criar website<br> bonitos e responsivos. 
                Veja a sessão <br> de projetos para saber mais</p>
        </div>    
        <div id="javascript">
            <img src="./imgs/logo-javascript.svg" height="80px">
            <h5>Javascript</h5>
            <p>Eu uso javascript para deixar os web sites<br> mais interativos e dinamicos. 
                Veja a sessão <br> de projetos para saber mais</p>
        </div>    
        
        <div id="php">
            <img src="./imgs/php.svg" height="80px">
            <h5>Php</h5>
            <p>Eu uso o php no lado do servido para fazer os websites<br> mais funcionais e interativos de acordo com o usuário. 
                <br>Veja a sessão  de projetos para saber mais</p>
        </div>    
        <div id="nodejs">
            <img src="imgs/nodejs-icon.svg" height="80px">
            <h5>Node.js</h5>
            <p>Eu uso html e css para criar website<br> bonitos e responsivos. 
                Veja a sessão <br> de projetos para saber mais</p>
        </div>    
        <div id="bd">
            <img src="imgs/mysql.svg" height="80px">
            <h5>MySQL</h5>
            <p>Eu uso o mysql pra armazenar todos os<br> dados do website. 
                Veja a sessão <br> de projetos para saber mais</p>
        </div>    
    </section>
    <section id="hire">
        <h3>Vamos trabalhar juntos!</h3>
        <p>Estou disponivel para trabalhos freelancer ou full time</p>
        <button><a href="#contact">Me contrate!</a></button>
    </section>
    <section id="projects">
        <h3>Projetos</h6>
        <p>Mostrando projetos completamente funcionais. Construi esse projetos para demonstra minhas habilidade <br> em
         Front-end , Back-end e Banco de dados. Todos esse projetos podem ser visitadas como demos abaixo.   
        </p>
        <div>
            <img src="./imgs/logo-icon.svg" height="200px">
            <h2>The Perfector</h2>
            <p>É um site que serve para a duvulgação de serviços. <br>
               Nele temos a área do cliente e empresa para um divulgar <br> o outro fazer 
            </p>
            <a href="https://github.com/felipe-alves142/the-perfector">Veja no Github</a>
        </div>
        <div>
            <img src="./imgs/nodejs-icon.svg" height="200px">
            <h2>NlwValoriza</h2>
            <p>É um software de avaliação entre colegas de trabalho atraves de elogios. <br>
              Nele o superior pode avaliar o trabalho entrege pelo desenvolvedor. 
            </p>    
            <a href="https://github.com/felipe-alves142/nlwValoriza">Veja no Github</a>
            <a href="https://felipe-alves142.github.io//the_perfector/paginas/index.html">Veja uma demo</a>
        </div>
        <div>
            <!--     -->
        </div>
    </section>
    <section id="contact">
        <form action="enviar.php" method="POST"> 
            <h2>Me Contate</h2>
            <p>Sempre estou disponivel para contato</p>
            <label for="name">
                <strong>Nome:</strong>
            </label> <br>
            <input type="text" name="nome" id="name" placeholder="Nome"> <br>
            <label for="email">
                <strong>Email</strong>
            </label> <br>
            <input type="text" name="email" id="emai" placeholder="Email:"> <br>
            <label for="msg">
                <strong>Mensagem</strong>
            </label> <br>
            <textarea type="text" name="mensagem" id="msg" placeholder="Mensagem"></textarea> 
            <input type="submit" value="Enviar">
           
        </form>
    </section>
</body>
</html>

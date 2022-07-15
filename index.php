<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mônica Torres</title>

  <link href="favicon.png" rel=icon>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- FrameWork Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="assets/css/owl.carousel.css" rel="stylesheet">-->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="#"><img src="#" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#perfil">perfil</a>
        <a class="nav-item nav-link" href="#questoes">questões</a>
        <a class="nav-item nav-link" href="#projeto">projeto</a>
      </div>
    </div>
  </nav>

  <section class="perfil" id="perfil">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <img src="assets/img/monica.jpeg" alt="Mônica" width="270">
        </div>

        <div class="col-md-6 mt-2">
          <h1>Mônica Torres</h1>
          <p>
            Sou formada em Análise e Desenvolvimento de Sistemas na Fatec de São José dos Campos, estou sempre em busca de novos desafios e disposta a aprender!
          </p>
          <p>
            Conhecimentos: JS e ES6, PHP, HTML, CSS, MySQL, MongoDB, SQL Server, BD Oracle, PL/SQL.
          </p>
          <p>
            Caso queira entrar em contato comigo:
          </p>
          <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/in/m%C3%B4nica-torres-198875149" role="button"><i class="fab fa-linkedin"></i></a>
          <a class="btn btn-primary btn-lg" href="https://github.com/Monica261" role="button"><i class="fab fa-github"></i></a>
          <a class="btn btn-primary btn-lg" href="https://api.whatsapp.com/send?phone=5512982805148" role="button"><i class="fab fa-whatsapp"></i></a>
          <a class="btn btn-primary btn-lg" href="mailto:nathaliatorres26@hotmail.com" role="button"><i class="far fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="questoes" id="questoes">
    <div class="container text-left">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center mb-5">Confira as questões!</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="expertise-item">
            <h4>
              1.Considere o seguinte código SQL:
            </h4>

            <p>
              CREATE TABLE EMPREG (ID INTEGER PRIMARY KEY, NOME CHAR(20), SOBRENOME CHAR(60), SALARIO REAL);
              INSERT INTO EMPREG VALUES (44, ‘William’, ‘Simpson’, 6387.01);
              INSERT INTO EMPREG VALUES (11, ‘Fulano’, ‘Brasil’, 3045.78);
              INSERT INTO EMPREG VALUES (22, ‘Beltrano’, ‘da Silva’, 4046.79);
              INSERT INTO EMPREG VALUES (33, ‘Carlos’, ‘da Silva’, 13040.78);
              CREATE TABLE COMISSAO
              (ID INTEGER REFERENCES EMPREG(ID), MES INTEGER CHECK (MES BETWEEN 1 AND 12),
              VALOR_COMISS REAL, PRIMARY KEY (ID, MES));
              INSERT INTO COMISSAO VALUES (22,1,1001.67);
              INSERT INTO COMISSAO VALUES (22,6,1001.67);
              INSERT INTO COMISSAO VALUES (44,5,2338.67);
              INSERT INTO COMISSAO VALUES (11,1,400.67);
              INSERT INTO COMISSAO VALUES (33,9,2340.00);
              INSERT INTO COMISSAO VALUES (44,12,2940.67);
            </p>

            <h5>
              O resultado da consulta: SELECT NOME FROM EMPREG WHERE 2340.00 < (SELECT AVG(VALOR_COMISS) FROM COMISSAO WHERE EMPREG.ID=COMISSAO.ID); </h5>

                <p>
                <form name=respostas>
                  <input type="checkbox" name="option1" checked="checked" onclick="return false;" />
                  <strong>A) William</strong><br>
                  <input type="checkbox" name=mybox onclick="return false;" />
                  B) Fulano<br>
                  <input type="checkbox" name=mybox onclick="return false;" />
                  C) da Silva<br>
                  <input type="checkbox" name=mybox onclick="return false;" />
                  D) Carlos<br>
                  <input type="checkbox" name=mybox onclick="return false;" />
                  E) 67<br>
                </form>
                </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="expertise-item">
            <h4>
              3. Os Web Services são muito úteis para o desenvolvimento de sistemas de informação em empresas, pois
            </h4>
            <p>
            <form name=respostas>
              <input type="checkbox" name="option1" onclick="return false;" />
              A) utilizam bancos de dados “No SQL”;<br>
              <input type="checkbox" name=mybox onclick="return false;" />
              B) possuem capacidade de aprendizado;<br>
              <input type="checkbox" checked="checked" name=mybox onclick="return false;" />
              <strong>C) suportam a interação entre sistemas de informação (interoperabilidade); </strong><br>
              <input type="checkbox" name=mybox onclick="return false;" />
              D) viabilizam a interação entre os usuários de um sistemas de informação (web chat);<br>
              <input type="checkbox" name=mybox onclick="return false;" />
              E) permitem a interação de sistemas de informação com seus usuários, pois utilizam HTML como sua principal linguagem. <br>
            </form>
            </p>
          </div>
          <div class="expertise-item">
            <h4>
              4. O objeto de banco de dados que é executado automaticamente pelo sistema em decorrência de uma modificação no banco de dados é conhecido como:
            </h4>
            <p>
              <input type="checkbox" name=mybox onclick="return false;" />
              A) Function<br>
              <input type="checkbox" name=mybox onclick="return false;" />
              B) Package<br>
              <input type="checkbox" name=mybox onclick="return false;" />
              C) Tablespace<br>
              <input type="checkbox" name=mybox checked="checked" onclick="return false;" />
              <strong>D) Trigger</strong><br>
              <input type="checkbox" name=mybox onclick="return false;" />
              E) Sequence<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="expertise-item">
            <h4>2. Em um banco de dados, as tabelas foram criadas com as seguintes instruções:</h4>
            <p>CREATE TABLE Pessoa ( PessoaId number,Nome varchar(255),Sobrenome varchar(255),
              Endereco varchar(255),Cidade varchar(255) );
              CREATE TABLE Produto ( ProdutoId number,NomeProduto varchar(255), PrecoProduto number);
              CREATE TABLE Pedido( ProdutoId number, PessoaId number, Quantidade number);
            </p>
            <h4>Considerando-se esse banco, em cada item forneça uma única expressão SQL que: </h4>
            <h5>A) retorne nome e preço de todos os produtos da empresa: </h5>
            <p>SELECT NomeProduto, PrecoProduto FROM produto; </p>
            <h5>B) altere, aumentando em 10%, o preço dos produtos cujo nome comece por “Queijo”: </h5>
            <p>UPDATE produto SET PrecoProduto = PrecoProduto * 1.10 WHERE NomeProduto LIKE 'Queijo';</p>
            <h5>C) inclua um campo numérico “NumeroPedido” na tabela Pedido: </h5>
            <p>ALTER TABLE pedido ADD NumeroPedido int(255);</p>
            <h5>D) considerando a nova tabela Pedido, de acordo com o item (c) acima, retorne Nome, Sobrenome, NumeroPedido e o valor do pedido para todas as pessoas, ordenadas por nome e sobrenome de forma ascendente: </h5>
            <p>SELECT Nome, Sobrenome, NumeroPedido, PrecoProduto FROM pessoa p
              INNER JOIN pedido ON pedido.NumeroPedido = p.PessoaId
              INNER JOIN produto ON produto.ProdutoId = p.PessoaId
              order by nome, Sobrenome ASC;</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="projeto" id="projeto">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 col-xs-12">
          <h2 class="mb-5">Confira o projeto!</h2>
          <button onclick="window.location.href='/teste_santacasa/index_atendimento.php'" class="btn btn-primary btn-lg" type="submit">Atendimento <i class="fas fa-user-nurse"></i></button>

          <button onclick="window.location.href='/teste_santacasa/index_beneficiario.php'" class="btn btn-primary btn-lg" type="submit">Beneficiario <i class="fas fa-user"></i></button>

          <button onclick="window.location.href='/teste_santacasa/index_especialidade.php'" class="btn btn-primary btn-lg" type="submit">Especialidade <i class="fas fa-stethoscope"></i></button>
        </div>
      </div>

      <div class="row text-center mt-5">
        <div class="col-md-12 col-xs-12">
          <button onclick="window.location.href='/teste_santacasa/index_local.php'" class="btn btn-primary btn-lg" type="submit">Local <i class="fas fa-map-marked-alt"></i></button>

          <button onclick="window.location.href='/teste_santacasa/index_medico.php'" class="btn btn-primary btn-lg" type="submit">Médico <i class="fas fa-user-md"></i></button>

          <button onclick="window.location.href='/teste_santacasa/index_procedimento.php'" class="btn btn-primary btn-lg" type="submit">Procedimento <i class="far fa-hospital"></i></button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <a class="botao-whats" href="https://api.whatsapp.com/send?phone=5512982805148"><i class="fab fa-whatsapp"></i></a>
  </section>

  <?php include("footer.php"); ?>


  <!--<script src="assets/js/jquery-2.1.4.min.js"></script>-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--<script src="assets/js/owl.carousel.min.js"></script>-->
  <script src="assets/js/scripts.js"></script>

</body>

</html>
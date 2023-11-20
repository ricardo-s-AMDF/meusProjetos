<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Pesquisa sobre Programação</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light"> 
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Pesquisa de Opinião</h2>
          <p class="lead">Perguntas sobre o mercado de programação!</p>
        </div>
        <!-- INPUTS -->
        <div class="row g-5">
          <h4 class="mb-3">Responda as 6 questões abaixo</h4>
            <form class="needs-validation" method="POST" action="actions/actionCadastrarPesquisa.php" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="Nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Digite seu primeiro nome" name="nomePesquisa" value="" required>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Idade</label>
                  <input type="number" class="form-control" id="lastName" placeholder="Digite sua idade" name="idadePesquisa" value="" required>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <!-- SELECTS -->
                <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, qual a linguagem mais lucrativa de trabalhar atualmente?</label>
                  <select class="form-control" id="username" placeholder="Com que idade começou a programar?" name="lucrativaPesquisa" required>
                    <option value="Javascript">Javascript</option>
                    <option value="Python">Python</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="C#">C#</option>
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>
                    <option value="Swift">Swift</option>
                    <option value="Go">Go</option>
                    <option value="Ruby">Ruby</option>
                    <option value="SQL">SQL</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, qual a importância de ter uma faculdade para conseguir trabalhar como programador?</label>
                  <select class="form-control" id="username" placeholder="" name="faculdadePesquisa" required>
                    <option value="Muito Importante">Muito Importante</option>
                    <option value="Importante, porém não é única coisa que precisa ter">Importante, porém não é única coisa que precisa ter</option>
                    <option value="Não faz diferença">Não faz diferença</option>
                    <option value="É desnecessário, por conta dos cursos especializados na internet">É desnecessário, por conta dos cursos especializados na internet</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, o que é primordial para um programador conseguir seu primeiro emprego na área?</label>
                  <select class="form-control" id="username" placeholder="" name="empregoPesquisa" required>
                    <option value="Ter concluído a faculdade">Ter concluído a faculdade</option>
                    <option value="Construir um portfólio com seus projetos">Construir um portfólio com seus projetos</option>
                    <option value="Hospedar os códigos do seus projetos no GitHub">Hospedar os códigos do seus projetos no GitHub</option>
                    <option value="Ter vários certificados de cursos especializados">Ter vários certificados de cursos especializados</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                 <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, qual melhor editor de código-fonte para programadores?</label>
                  <select class="form-control" id="username" placeholder="" name="editorPesquisa" required>
                    <option value="Sublime Text">Sublime Text</option>
                    <option value="Visual Studio Code">Visual Studio Code</option>
                    <option value="ATOM">ATOM</option>
                    <option value="CodeAnywhere">CodeAnywhere</option>
                    <option value="Brackets">Brackets</option>
                    <option value="NotePad++">NotePad++</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, qual a faculdade mais pedida nos currículos para as vagas de desenvolvedores</label>
                  <select class="form-control" id="username" placeholder="" name="adsFaculdadePesquisa" required>
                    <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                    <option value="Engenharia de Software">Engenharia de Software</option>
                    <option value="Ciência da Computação">Ciência da Computação</option>
                    <option value="Sistemas de Informação">Sistemas de Informação</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Em sua opinião, qual a melhor forma de contratação de desenvolvedores</label>
                  <select class="form-control" id="username" placeholder="" name="contratacaoPesquisa" required>
                    <option value="CLT">CLT</option>
                    <option value="PJ">PJ</option>
                  </select>
                  <div class="invalid-feedback">
                    Preencha corretamente!
                  </div>
                </div>

              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue</button>
            </form>
          </div>
        </div>
        <br>
      </main>
    </div>


   <script src="../script/bootstrap.bundle.min.js"></script>
   <script src="../script/form-validation.js"></script>
  </body>
</html>

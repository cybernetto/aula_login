<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include_once "csspadrao.php"; ?>

</head>

<body>

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <?php include_once "alert.php"; ?>
                    <form method="post" name="frmcadastro" id="frmcadastro">
                        <div class="input-group mb-3">
                            <input required autofocus name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome e sobre nome*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtemail" id="edtemail" type="email" class="form-control" placeholder="Digite seu endereço de e-mail*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtsenha" id="edtsenha" type="password" class="form-control" placeholder="Digite sua senha*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="edttermos" name="edttermos" type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">Estou de acordo com todas as condições, <a id="myBtn" href="#abrirModal">Leia os termos</a></label>
										<!-- Modal -->
										<div id="myModal" class="modal">

										  <!-- Modal conteudo -->
										  <div class="modal-content">
											<span class="close">&times;</span>
											<p>Os serviços e/ou produtos são oferecidos pela <em><strong>(pessoa física ou jurídica, tendo por nome/razão social… e o seu nome fantasia…, inscrita sob o CNPJ/CPF nº…)</strong></em>, neste termo representada apenas por site, blog ou empresa, responsável e titular da propriedade intelectual, com todos os direitos reservados sobre os artigos, vídeos e imagens presentes e relacionados no mesmo.</p>
											<p>A permanência no website implica-se automaticamente na aceitação tácita do presente termos de uso a seguir.</p>
											<span id="elementor-toc__heading-anchor-1" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-1" class="elementor-menu-anchor "></span><h3>1. <strong>Do Objeto</strong> </h3>
											<p>Essa plataforma tem como finalidade o uso do website com os conteúdos de propriedade intelectual da empresa, com diferentes propósitos, sempre voltado para informação e conhecimento do usuário. A Empresa proporciona informação e conteúdo de alta qualidade, feito por equipe profissional e revisado por especialistas, com função apenas informativa.</p>
											<p>Por meio dessa plataforma também pode ser realizado e-commerce, ou seja, a venda por meio eletrônico de produtos e serviços<strong>.</strong> Você também terá acesso a conteúdo original, vídeos e artigo feito pela nossa equipe, que proporciona a solução de dúvidas e questionamentos do leitor.</p>
											<p>Destaca-se que não se responsabilizamos pelo mau uso destas informações, e que nossa empresa fará o possível para manter todos os dados atualizados, porém pode algum artigo conter alguma informação que não reflete a verdade no presente momento.</p>
											<span id="elementor-toc__heading-anchor-2" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-2" class="elementor-menu-anchor "></span><h3>2. <strong>Da aceitação</strong></h3>
											<p class="hyper2">O presente documento “Termos e Condições de Uso” aplicáveis ao uso do site/blog, criado pelo Advogado <a href="https://diegocastro.adv.br/modelo-de-termos-de-uso-para-blogs-e-sites/">Diego Castro (OAB/PI 15.613)</a> e modificado para uso neste site, especifica que o usuário antes de acessar o site leia bem e revise os termos presentes, pois estabelece obrigações contratadas de livre e espontânea vontade por tempo indeterminado entre todos os usuários ou visitantes do site, ou blog.</p>
											<p>Ao utilizar ou acessar a plataforma, o usuário aceita e se compromete com as regras estabelecidas de maneira integral, sob o risco de ser penalizado criminalmente. A aceitação do presente instrumento é imprescindível para o acesso à página. Caso não concorde com os termos e condições de uso que constam no decorrer desse documento, por favor não acesse ou use site.</p>
											<p>O Site e subsidiários se reservam ao direito de atualização dos termos de uso periodicamente, sem qualquer aviso, podendo assim, esses sofrer atualizações ou modificações.</p>
											<span id="elementor-toc__heading-anchor-3" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-3" class="elementor-menu-anchor "></span><h3><strong>3. Do acesso dos usuários</strong></h3>
											<p>Em alguns dias ou horários o acesso à página poderá vir a ser interrompido, limitada ou suspensa, devido a modificações, atualizações ou ações semelhantes que sejam necessárias para melhorar o desempenho e acesso aos usuários e ao proprietário.</p>
											<p>O site e qualquer serviço oferecido pela página só poderão ser disponibilizados a você caso concorde integralmente com a legislação aplicável e com este termo de uso.</p>
											<p>Menores de 18 anos ou aqueles que não possuírem plena capacidade civil devem obter o prévio consentimento expresso dos responsáveis para ter acesso à página, sendo responsabilidade exclusiva dos mesmos, o acesso ao conteúdo da página por menores de 18 anos ou por aqueles que não tenham capacidade civil. </p>
											<p>Se você for menor de 18 anos não acesse o site sem autorização do seu responsável. Preste bastante atenção, ao utilizar/acessar esse site você declara que tem capacidade jurídica plena, ou seja, declara ser maior de 18 anos e ser capaz civilmente. </p>
											<span id="elementor-toc__heading-anchor-4" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-4" class="elementor-menu-anchor "></span><h3>4. <strong>Do Cadastro </strong></h3>
											<p>Para você ter acesso à página/funcionalidades/serviços pode ser necessário a realização de um cadastro prévio.</p>
											<p>Ao se cadastrar o usuário deverá informar corretamente os dados completos, sendo sua a exclusiva responsabilidade de atualiza-los, bem como o seu comprometimento que os dados apresentados tem veracidade.</p>
											<p>O usuário do site/blog ainda se compromete a não informar a qualquer pessoa/terceiros os seus dados cadastrais que contém na plataforma e se responsabiliza pelo uso e pelo que seja feito. Em alguns casos, após a confirmação cadastral, você terá um login (usuário e senha) e assim poderá acessar a página. O acesso é individual.</p>
											<p>Qualquer atividade utilizada com o seu login é de sua total responsabilidade. Em caso de uso indevido da senha ou perda informe rapidamente a plataforma. A sua conta é intransferível. Não é licito vender, ceder, alugar ou emprestar.</p>
											<span id="elementor-toc__heading-anchor-5" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-5" class="elementor-menu-anchor "></span><h3>5. <strong>Licença</strong></h3>
											<p>A EMPRESA concede para o visitante do website, uma licença limitada para visualizar os materiais exibidos no site ou blog, exclusivamente para uso pessoal sem fins lucrativos. </p>
											<p>Todos os materiais encontrados, como artigos, conteúdos escritos ou gráficos, vídeos, logos e design, são de propriedade da EMPRESA<strong> </strong>e seus fornecedores de conteúdo, tendo esses reservados o direito em relação à propriedade intelectual e proibido sua cópia sem prévia autorização expressa.</p>
											<p>Os materiais contidos nessa página são resguardados pela <a href="http://www.planalto.gov.br/ccivil_03/leis/l9610.htm">Lei 9.610/18- Lei dos Direitos Autorais,</a> Lei nº 9.279/96- Lei da Propriedade Industrial e outras regras, regulamentos pertinentes e legislações nacionais ou internacionais de propriedade intelectual aplicáveis.</p>
											<p>Esses termos de uso não cedem ou transferem ao usuário do site qualquer direito a utilização da propriedade intelectual, a não ser a concedida para uso pessoal ou a não ser a concedida com a licença limitada que foi adquirida.</p>
											<p>O usuário não poderá usar qualquer componente da página sem o consentimento prévio e expresso do proprietário e respectivos titulares. Os usos indevidos da página ou dos conteúdos contidos no mesmo violam os direitos de propriedade intelectual da EMPRESA, e são puníveis com os termos da legislação aplicável.</p>
											<span id="elementor-toc__heading-anchor-6" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-6" class="elementor-menu-anchor "></span><h3>6. <strong>Responsabilidades e usos específicos</strong></h3>
											<p>Além das responsabilidades previstas nos termos e condições de uso, você concorda em cumprir as seguintes cláusulas:</p>
											<ul><li>Utilizar o site apenas para finalidades devidas e legitimas, sem qualquer desvirtualização da principal finalidade;</li><li>Fornecer informações completas, atualizadas, precisas e verdadeiras;</li><li>Publicar materiais ou comentários que você tenha total responsabilidade, direitos e licenças de uso;</li><li>Assumir riscos de qualquer utilização indevida do site ou dos conteúdos nele disponibilizados;</li><li>Informações divulgadas pelo usuário, seja por comentário ou de qualquer outra forma;</li><li>Proteção pelos seus dados de login;</li><li>É terminantemente proibido conteúdo de páginas externas, links para fins comerciais ou publicitários, informações ilícitas, vexatórias, violentas, polemicas, xenofóbicas, pornográficas, ofensivas e discriminatórias.</li></ul>
											<p>O site ou blog também pode vir a apresentar links como botões de hyperlinks, que direciona o acesso a sites de terceiros.</p>
											<p>Os sites/blogs de terceiros não tem nenhuma ligação com essa página, não sendo o proprietário (pessoa física ou jurídica) responsável por qualquer informação, material ou conteúdo que contenha em sites que não o da EMPRESA e não sendo responsáveis por nenhum conteúdo ou produto a venda em outros sites.</p>
											<p>O site/ blog ou qualquer outra plataforma não tem nenhuma associação, ou relacionamento, e muito menos alguma forma de patrocínio com o proprietário dessa página.</p>
											<p>A responsabilidade pelo acesso de sites que aparecem na página é exclusiva de sua responsabilidade.</p>
											<p>A EMPRESA não se responsabiliza por sites de terceiros que apareçam nos links internos do blog ou do site, e sempre confiram os termos de uso e políticas de privacidade de cada site que visitar. Não nos responsabilizamos por políticas de privacidade de terceiros, mesmo que sejam sites/blogs de links que apareceram em nossa plataforma.</p>
											<span id="elementor-toc__heading-anchor-7" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-7" class="elementor-menu-anchor "></span><h3>7<strong>. Da Política de Privacidade e dos Cookies</strong></h3>
											<p>Além do presente documento, o usuário deverá concordar com as disposições contidas na Política de Privacidade estabelecida pela plataforma e, neste ato, autoriza a empresa a realizar a coleta, de armazenar, de divulgar, de utilizar, e de compartilhar estes dados com outras empresas e parceiros da mesma, seus dados pessoais conforme o previsto na Política de Privacidade.</p>
											<p>Um cookie é um pequeno arquivo de texto, que quando o usuário acessa o site ou blog, é solicitado em seu dispositivo para que o navegador lembre informações sobre o mesmo, como nome de usuário e informações de logins.</p>
											<p>Os cookies são definidos por nossa equipe, podendo ser cookies de domínio do site, publicidade ou de marketing.</p>
											<p>Utilizamos os cookies para fins de publicidade, redes sociais, desempenho ou estritamente necessários.</p>
											<p><em>Ex: Cookies de publicidade: Esse tipo de cookie pode ser estabelecido pelo site/blog ou parceiros relacionados a publicidades para construir um perfil sobre os interesses dos usuários e assim mostrar assuntos considerados relevantes.</em></p>
											<p>8. <strong>Monetização</strong></p>
											<p>O site/blog é ou pode ser monetizado por diferentes forma, incluindo-se, mas não se limitando a parceria diretas com empresas, ou plataformas de anúncios como o Google Ads (Adsense) ou similares.</p>
											<p>Estes programas utilizam cookies para personalizar os anúncios aos visitantes e podem utilizar dados de navegação para oferecer melhores anúncios para o visitante.</p>
											<p>Qualquer post patrocinado é sinalizado com o marcador “Publicidade”</p>
											<p>A Empresa não responsabiliza por compras ou acesso a site de terceiros que por ventura venham a aparecer nos anúncios, já que os mesmos podem ser feito de forma automática.</p><p>Se deseja ter o seu produto anunciado em nosso blog/site ou anunciar o seu produto, ou serviço, entre em contato.</p>

											<span id="elementor-toc__heading-anchor-8" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-8" class="elementor-menu-anchor "></span><h3>9. <strong>Do Foro</strong></h3>
											<p>Em caso de eventuais litígios decorrentes de qualquer controvérsia será aplicado o Direito brasileiro e a legislação nacional aplicável, onde o foro elegido será o da comarca da Empresa. </p>
											<p></p>
											<hr class="wp-block-separator">
											<span id="elementor-toc__heading-anchor-9" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-9" class="elementor-menu-anchor "></span><h2><strong>Sobre os termos de uso:</strong></h2>
											<span id="elementor-toc__heading-anchor-10" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-10" class="elementor-menu-anchor "></span><h3><strong>O que são Termos de uso?</strong></h3>
											<p>Você pode ver no nosso outro artigo <a href="https://diegocastro.adv.br/termos-de-uso-para-sites-e-blogs/">o que são os termos de uso,</a> esclarecendo pontos importantes sobre o tema.</p>
											<p><strong>É um documento que apresenta condições e regras sobre a utilização da página</strong>, nele estarão dispostas cláusulas informativas sobre o uso e responsabilidade, tanto do proprietário, quanto do usuário, é como um contrato firmado entre as partes (usuário e proprietário do website), onde são dispostos responsabilidades e direitos.</p>
											<p>Lembre-se também de<a href="https://diegocastro.adv.br/modelo-politica-privacidade/"> ter uma política de privacidade </a>no seu site.</p>
											<span id="elementor-toc__heading-anchor-11" class="elementor-menu-anchor "></span><span id="elementor-toc__heading-anchor-11" class="elementor-menu-anchor "></span><h3><strong>O que não pode faltar em meu termo de uso?</strong></h3>
											<p><strong>Há cláusulas que não podem faltar em seus termos de uso, abaixo citaremos algumas:</strong></p>
											<ul><li>Direitos autorais;</li><li>Propriedade do site ou blog;</li><li>Que usuário pode acessar o seu site;</li><li>Quais os requisitos para se cadastrar ou criar uma conta no seu site;</li><li>Delimitação das obrigações e responsabilidades;</li><li>Se for empresa (Política de devolução e reembolso);</li><li>Glossário;</li><li>Propriedade intelectual, direitos autorais e logotipos;</li><li>E-mails promocionais e conteúdo;</li><li>Qual produto ou serviço o blog ou site estará ofertando;</li><li>Direitos autorais e propriedade industrial.</li></ul>
											<p><strong>ATENÇÃO!</strong></p>
											<p>Após o termo de uso ser feito, o documento deverá ser disponibilizado em um link na plataforma para que os usuários da página possam acessar a qualquer momento,</p>
											<p class="caixa">É possível a utilização do modelo abaixo e sua modificação, desde que se mantenha um link de citação para a fonte e o autor, conforme o Creative Commons Attribution 4.0 International – Atribuição-NãoComercial CC BY-NC.</p>
											<p>Para acessar a página, os serviços ou produtos oferecidos os usuários devem concordar com o que contém no documento.</p>
											<p>Você também deve substituir as palavras negritadas pelos seus dados.</p>

										  </div>

										</div>

                                </div>
                            </div>
                        </div>
		

                        <div class="social-auth-links text-center">
                            <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-plus mr-2"></i>
                                Salvar
                            </button>
                        </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <a href="login.php" type="button" class="btn btn-block btn-warning">
                            <i class="fas fa-ban"></i>
                            Cancelar
                        </a>
                    </div>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- Valida os dados do forulário e caso seja valido salva os dado no banco de dados -->
        <?php include_once "jspadrao.php"; ?>
        <script src="js/cadastro.js"></script>

    </body>

</html>
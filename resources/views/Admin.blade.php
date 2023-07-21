<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Felicittá Festas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top" class="d-inline-block align-text-top">Felicittá Festas
                   </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('/produto')}}">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/cardapio')}}">Cardápio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/pacote')}}">Pacotes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/cliente')}}">Clientes</a></li>

                    </ul>
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/principal') }}" class="btn btn-dark"></a>
                        <a class="btn btn-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class='fas fa-sign-out-alt'></i> {{ __('Sair') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark">Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Especialista em tornar seus sonhos em realidade!</div>
                <div class="masthead-heading text-uppercase">Felicittá Festas</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre nós</h2>
                    <h3 class="section-subheading text-muted"><p>Somos uma empresa especializada em festas temáticas infantis, onde transformamos os sonhos das crianças em realidade. Com uma equipe dedicada e cheia de criatividade, proporcionamos momentos inesquecíveis para os pequenos e suas famílias.</p>
                        <p>Nossos profissionais altamente qualificados e apaixonados trabalham em estreita colaboração com os pais para criar festas personalizadas que reflitam os interesses e as paixões do aniversariante.</p>
                        <p>Oferecemos uma ampla variedade de temas para escolher, desde contos de fadas e super-heróis até piratas e astronautas. Seja qual for o tema escolhido, montamos um ambiente repleto de decorações encantadoras, cenários impressionantes e detalhes cuidadosamente planejados.</p>
                        <p>Nossos pacotes de festas incluem uma gama completa de serviços para tornar o evento o mais tranquilo possível para os pais. Cuidamos de tudo, desde até do entretenimento e da alimentação.</p>
                        <p>Na Felicittá festas, estamos empenhados em superar as expectativas de nossos clientes. Acreditamos que cada criança merece um momento mágico em sua vida, e é isso que buscamos proporcionar em cada festa que organizamos.</p>
                        </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-solid fa-people-roof fa-stack-1x fa-inverse" style="color: #ffffff;"></i>

                        </span>
                        <h4 class="my-3">Diversão em Família: </h4>
                        <p class="text-muted">Reune a família e para desfrutarem de momentos de alegria. A família toda têm a oportunidade de se divertir e celebrar o aniversário da criança, fortalecendo os laços familiares..</p>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-solid fa-brain fa-stack-1x fa-inverse" style="color: #ffffff;"></i>
                        </span>
                        <h4 class="my-3">Memórias Inesquecíveis</h4>
                        <p class="text-muted">Criam memórias duradouras e experiências inesquecíveis para as crianças. Os momentos especiais compartilhados com amigos e familiares, as brincadeiras, as surpresas e as risadas se tornam lembranças preciosas que serão lembradas ao longo da vida.</p>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-dark"></i>
                            <i class="fas fa-solid fa-comments fa-stack-1x fa-inverse" style="color: #ffffff;"></i>
                        </span>
                        <h4 class="my-3">Socialização</h4>
                        <p class="text-muted">Oportunidades valiosas para que as crianças interajam e socializem com seus amigos, colegas e familiares. Elas têm a chance de fazer novas amizades, fortalecer os laços existentes e aprender a se relacionar com outras pessoas em um ambiente descontraído.</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">A seguir, apresentamos fotos e descrições de algumas festas que a Felicittá realizou, para que você tenha inspirações.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dinossauro</div>
                                <div class="portfolio-caption-subheading text-muted">Tema com buffet personalizado</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ariel</div>
                                <div class="portfolio-caption-subheading text-muted">Decoração com bonecos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Brinquedos</div>
                                <div class="portfolio-caption-subheading text-muted">Projeto brinquedos na escola</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Circo</div>
                                <div class="portfolio-caption-subheading text-muted">Objetos relacionados ao tema</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mickey Mouse</div>
                                <div class="portfolio-caption-subheading text-muted">Buffet personalizado</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Brinquedos</div>
                                <div class="portfolio-caption-subheading text-muted">Espaço Kids</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pacotes</h2>
                    <h3 class="section-subheading text-muted">Divisão dos pacotes.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pacote Básico</h4>
                                <h5 class="subheading">R$ 500 a R$ 800</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Comidas: Salgadinhos variados, mini pizza, cachorro-quente, refrigerantes e bolo.
                                Brinquedos: Cama elástica pequena, piscina de bolinhas e pintura facial. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pacote Econômico</h4>
                                <h5 class="subheading">R$ 800 a R$ 1.200</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Comidas: Salgadinhos variados, mini pizza, cachorro-quente, refrigerantes, bolo e docinhos.<br>
                                Brinquedos: Cama elástica média, piscina de bolinhas, pula-pula inflável e escorregador.<br>
                                Atividades extras: Pintura facial e algodão doce.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pacote Premium</h4>
                                <h5 class="subheading">R$ 1.200 a R$ 2.000</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Comidas: Salgadinhos variados, mini pizza, cachorro-quente, refrigerantes, bolo, docinhos e salgados finos.<br>
                                Brinquedos: Cama elástica grande, piscina de bolinhas, pula-pula inflável, escorregador e tobogã.<br>
                                Atividades extras: Pintura facial, algodão doce, pipoca e personagens temáticos.</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nosso time</h2>
                    <h3 class="section-subheading text-muted">Nossa equipe especializada e pronta para o seu pedido!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Dayanna de Campos Henrique</h4>
                            <p class="text-muted">Desenvolvedora</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Julia Vertuoso Pereira</h4>
                            <p class="text-muted">Desenvolvedora</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Letícia Badin Dall'Igna</h4>
                            <p class="text-muted">Desenvolvedora</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/4.jpg" alt="..." />
                            <h4>Maria Eduarda Camargo</h4>
                            <p class="text-muted">Desenvolvedora</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dinossauro</h2>
                                    <p class="item-intro text-muted">Tema com buffet personalizado</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Festa com tema de animais pré-históricos, contando com balões, e folhas na decoração e um buffet personalizado com biscoitos de dinossauro, bolo decorado e doces variados.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente: </strong>
                                            José
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Privado
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ariel</h2>
                                    <p class="item-intro text-muted">Decoração com bonecos</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Festa com tema de fundo do mar, incluindo cenário para fotos, doce, bolos e decoração com bonecos relacionados ao tema.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Maitê
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Privado
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Brinquedos</h2>
                                    <p class="item-intro text-muted">Projeto brinquedos na escola</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Projeto com piscina de bolinhas, tobogã e pula pula inflável, escorregador, entre outros brinquedos para diversão, contando com profissionais qualificados para garantirem a segurança das crianças durante o uso dos aparelhos.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Escola Estadual DaJuLeMa
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Pública
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Circo</h2>
                                    <p class="item-intro text-muted">Objetos relacionados ao tema</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Festa com carrinho de pipoca, cenário fotográfico, balões e buffet personalizado para o tema, contando com sacolinhas para lembrancinha.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Theo
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Privado
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Mickey Mouse</h2>
                                    <p class="item-intro text-muted">Buffet personalizado</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Festinha contendo, tapete vermelho, cenário fotográfico, plantas, objetos relacionados ao tema e um buffet personalizado, contando com doces no formato do Mickey e um bolo de 4 andares com o tema Disney.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Mateus
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Privado
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar Projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Brinquedos</h2>
                                    <p class="item-intro text-muted">Espaço Kids</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Um espaço kids contendo cama elástica, piscina de bolinhas e tobogã inflável, junto com um cenário fotográfico da Minnie com bonecos do tema.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente:</strong>
                                            Colégio LeJuMaDa
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Pública
                                        </li>
                                    </ul>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        fechar projeto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Dayanna, Julia V., Letícia e Maria Eduarda - Módulo 8</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Política de provacidade</a>
                        <a class="link-dark text-decoration-none" href="#!">Termos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

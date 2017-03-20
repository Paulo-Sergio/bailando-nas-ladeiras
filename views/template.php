<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="<?= BASE_URL ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="<?= BASE_URL ?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="<?= BASE_URL ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">

        <!-- Worthy core CSS file -->
        <link href="<?= BASE_URL ?>assets/css/style.css" rel="stylesheet">

        <!-- Custom css --> 
        <link href="<?= BASE_URL ?>assets/css/custom.css" rel="stylesheet">
    </head>
    <body>
        <!-- header start -->
        <!-- ================ -->
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div class="logo smooth-scroll">
                                <a href="#banner"><img id="logo" src="<?= BASE_URL ?>assets/images/logo2.png" width="60" alt="Worthy"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-name-and-slogan smooth-scroll">
                                <div class="site-name"><a href="#banner">Olinda</a></div>
                                <div class="site-slogan">Bailando nas Ladeiras</div>
                            </div>

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-8">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="active"><a href="#banner">Home</a></li>
                                                <li class=""><a href="#sobre">Sobre</a></li>
                                                <li><a href="#parceiros">Parceiros</a></li>
                                                <li><a href="#videos">Vídeos</a></li>
                                                <li><a href="#galeria_fotos">Galeria Fotos</a></li>
                                                <li><a href="#contact">Contato</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->

                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>
            <!-- container -->
        </header>
        <!-- header end -->
        <!-- banner start -->
        <!-- ================ -->
        <div id="banner" class="banner">
            <div class="banner-image">
                <!--<img src="<?= BASE_URL ?>assets/images/banner.jpg">-->
            </div>
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn">
                            <h1 class="text-center">Nós somos <span>Cultural</span></h1>
                            <p class="lead text-center">Texto resumido sobreo o que é o Bailando nas Ladeiras... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <?php $this->loadViewInTemplate($viewName, $viewData) ?>

        <!-- section start -->
        <!-- ================ -->
        <section class="section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="sobre" class="title text-center">Sobre <span>Bailando nas Ladeiras</span></h1>
                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p>
                    </div>

                    <div class="space"></div>

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= BASE_URL ?>assets/images/logo.gif" alt="logomarca bailando nas ladeiras" width="315" style="display: inline-block">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Lorem ipsum dolor sit amet</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Reiciendis deleniti neque aliquid</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Ipsam fuga error commodi</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Lorem ipsum dolor sit amet</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Dignissimos molestiae necessitatibus</li>
                            </ul>
                        </div>
                    </div><!-- row -->

                    <div class="space"></div>

                    <h2>Becessitatibus quae beatae possimus ullam</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
                            <p>Vitae dolores quam magnam accusantium nam, voluptatibus expedita delectus, dolorum odio magni ut nemo nihil ex earum pariatur molestias velit eveniet, facere autem saepe aut. Ut minima itaque porro facere. Cumque vitae autem, dignissimos molestiae necessitatibus culpa aliquam deleniti soluta sunt voluptatibus tenetur, unde dolorem eligendi doloribus quibusdam facere totam. Possimus atque deserunt numquam aliquam magnam, facilis officiis illo alias ipsa voluptas laborum, praesentium eveniet nobis velit voluptatem odio eligendi, corporis et iste distinctio! Repellendus, id, ad.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                </div><!-- row principal -->
            </div><!-- container -->
        </section>
        <!-- section end -->



        <!-- section start -->
        <!-- ================ -->
        <section class="section translucent-bg bg-image-1 blue">
            <div class="container">
                <h1 id="parceiros"  class="text-center title">Conheça Nossos Parceiros</h1>

                <div class="space"></div>

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 1</h4>
                                <img  class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 2</h4>
                                <img  class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 3</h4>
                                <img  class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 4</h4>
                                <img class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 5</h4>
                                <img class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="media">
                            <div class="media-body text-center">
                                <h4 class="media-heading">Parceiro 6</h4>
                                <img class="img-thumbnail img-responsive" src="http://placehold.it/650x400"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="section">
            <div class="container">
                <h1 class="text-center title" id="videos">Confira nossos ultimos vídeos</h1>
                <div class="separator"></div>
                <p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                <br>			
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=9vMh9f41pqE&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=Bznxx12Ptl0&index=3&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=JVpTp8IHdEg&list=RDQMB-XDWzkbE10&index=8"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=9vMh9f41pqE&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=Bznxx12Ptl0&index=3&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=JVpTp8IHdEg&list=RDQMB-XDWzkbE10&index=8"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=9vMh9f41pqE&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=Bznxx12Ptl0&index=3&list=RDQMB-XDWzkbE10"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a class="youtube" href="https://www.youtube.com/watch?v=JVpTp8IHdEg&list=RDQMB-XDWzkbE10&index=8"><img class="img-rounded img-responsive" src="http://placehold.it/400x250"/></a>
                    </div>
                </div>

                <div class="space"></div>

                Conferir galeria completa
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <section class="section translucent-bg bg-image-2 blue">
            <div style="width: 100%; height: 400px;"></div>
        </section>
        <!-- section end -->

        <section class="section">
            <div class="container">
                <h1 class="text-center title" id="galeria_fotos">Confira nossa galeria com as ultimas fotos</h1>
                <div class="separator"></div>
                <p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
                <br>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/1_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/1_s.jpg" width="400"/>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/2_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/2_s.jpg" width="400"/>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/3_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/3_s.jpg" width="400"/>
                        </a>
                    </div>
                </div>

                <div class="space"></div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/1_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/1_s.jpg" width="400"/>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/2_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/2_s.jpg" width="400"/>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="<?= BASE_URL ?>assets/images/galeria_fotos/3_b.jpg" data-fancybox="images" data-width="2048" data-height="1365">
                            <img src="<?= BASE_URL ?>assets/images/galeria_fotos/3_s.jpg" width="400"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <!-- JavaScript files placed at the end of the document so the pages load faster
                ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL ?>assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- Video html5lightbox -->
        <script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/bootstrap.youtubemodal.js"></script>

        <!-- Gallery Fancybox -->
        <script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/jquery.fancybox.min.js"></script>

        <!-- Modernizr javascript -->
        <!--<script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/modernizr.js"></script>-->

        <!-- Isotope javascript -->
        <!--<script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/isotope/isotope.pkgd.min.js"></script>-->

        <!-- Backstretch javascript -->
        <!--<script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/jquery.backstretch.min.js"></script>-->

        <!-- Appear javascript -->
        <!--<script type="text/javascript" src="<?= BASE_URL ?>assets/plugins/jquery.appear.js"></script>-->

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="<?= BASE_URL ?>assets/js/template.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="<?= BASE_URL ?>assets/js/custom.js"></script>

        <script type="text/javascript">
            $(".youtube").YouTubeModal({
                // video ID
                youtubeId: '',
                // modal title
                title: '',
                // use video's title
                useYouTubeTitle: true,
                // default ID attribute
                idAttribute: 'rel',
                // default CSS class
                cssClass: 'YouTubeModal',
                // width/height
                width: 800,
                height: 480,
                // autohide
                autohide: 2,
                // autoplay
                // 0 = disable
                autoplay: 1,
                // color
                color: 'red',
                // shows controls
                // 0 = disable
                controls: 1,
                // fullscreen button
                // 1 = enable
                fs: 1,
                // infinite loop
                // 1 = enable
                loop: 0,
                // show video information
                // 1 = enable
                showinfo: 0,
                // player theme
                theme: 'light'

            });

            $('.fancybox').fancybox();

        </script>
    </body>
</html>

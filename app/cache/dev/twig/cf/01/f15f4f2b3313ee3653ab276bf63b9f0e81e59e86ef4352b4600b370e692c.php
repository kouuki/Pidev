<?php

/* PIDEVCrowdRiseBundle:Accueil:accueil.html.twig */
class __TwigTemplate_cf01f15f4f2b3313ee3653ab276bf63b9f0e81e59e86ef4352b4600b370e692c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIDEVCrowdRiseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Begin text carousel intro section -->
    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil2.jpg"), "html", null, true);
        echo ");\">

        <div class=\"container\">
            <div class=\"caption text-center text-white\" data-stellar-ratio=\"0.7\">

                <div id=\"owl-intro-text\" class=\"owl-carousel\">
                    <div class=\"item\">
                        <h1>We have Awesome things</h1>
                        <p>Let's make the web beautiful together</p>
                        <div class=\"extra-space-l\"></div>
                        <a class=\"btn btn-blank\" href=\"https://creativemarket.com/Themetorium\" target=\"_blank\" role=\"button\">Inscrivez-vous</a>
                    </div>
                    <div class=\"item\">
                        <h1>Join with us</h1>
                        <p>To the greatest Journey</p>
                        <div class=\"extra-space-l\"></div>
                        <a class=\"btn btn-blank\" href=\"https://creativemarket.com/Themetorium\" target=\"_blank\" role=\"button\">Inscrivez-vous</a>
                    </div>
                    <div class=\"item\">
                        <h1>I'm Unika</h1>
                        <p>One Page Responsive Theme</p>
                        <div class=\"extra-space-l\"></div>
                        <a class=\"btn btn-blank\" href=\"https://creativemarket.com/Themetorium\" target=\"_blank\" role=\"button\">Inscrivez-vous</a>
                    </div>
                </div>

            </div> <!-- /.caption -->
        </div> <!-- /.container -->

    </section>
    <!-- End text carousel intro section -->   

    <!-- Begin prices section -->
    <section id=\"prices-section\" class=\"page\">

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Populaires</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">That how much</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class=\"extra-space-l\"></div>

        <!-- Begin prices -->
        <div class=\"prices\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">
                           
                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">
                           
                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">
                           
                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">
                           
                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"price-box col-sm-6 col-md-3 wow flipInY\" data-wow-delay=\"0.3s\">
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body text-center\">
                                <p class=\"lead\"><strong>\$49</strong></p>
                            </div>
                            <ul class=\"list-group text-center\">
                                <li class=\"list-group-item\">Personal Use</li>
                                <li class=\"list-group-item\">3 projects</li>
                                <li class=\"list-group-item\">1 GB Disk</li>
                                <li class=\"list-group-item\">Custom Domain</li>
                                <li class=\"list-group-item\">24/7 Support</li>
                            </ul>
                            <div class=\"panel-footer text-center\">
                                <a class=\"btn btn-default\" href=\"#\">Order Now!</a>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t\t
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End prices -->
        <div class=\"extra-space-l\"></div>
    </section>
    <!-- End prices section -->

    <!-- Begin Portfolio -->
    <section id=\"portfolio-section\" class=\"page bg-style1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"portfolio\">
                        <!-- Begin page header-->
                        <div class=\"page-header-wrapper\">
                            <div class=\"container\">
                                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                    <h2>Catégories</h2>
                                    <div class=\"devider\"></div>
                                    <p class=\"subtitle\">What we are proud of</p>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div class=\"portfoloi_content_area\" >
                            <div class=\"portfolio_menu\" id=\"filters\">
                                <ul>
                                    <li class=\"active_prot_menu\"><a href=\"#porfolio_menu\" data-filter=\"*\">all</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".websites\">websites</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".webDesign\" >web design</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".appsDevelopment\">apps development</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".GraphicDesign\">graphic design</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".responsive\">responsive</a></li>
                                </ul>
                            </div>
                            <div class=\"portfolio_content\">
                                <div class=\"row\"  id=\"portfolio\">
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p1.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Skull Awesome</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 GraphicDesign\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p2.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Photo Frame</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 responsive\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p3.jpg"), "html", null, true);
        echo "  alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Hand Shots</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 webDesign websites\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p4.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Night Abstract</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment websites\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p5.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Joy of Independence</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 GraphicDesign\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p6.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Night Crawlers</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 responsive\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p7.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Last Motel</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 GraphicDesign\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p8.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Dirk Road</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 websites\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p9.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Old is Gold</a>
                                                <span>Subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio -->

    <!-- Begin about section -->
    <section id=\"about-section\" class=\"page bg-style1\">
        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h2>À Propos</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">Quelque Information</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin rotate box-1 -->
        <div class=\"rotate-box-1-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 col-sm-12\">
                        <a href=\"#\" class=\"rotate-box-1 square-icon wow zoomIn\" data-wow-delay=\"0.2s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-diamond\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Crowdfunding</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-6 col-sm-12\">
                        <a href=\"#\" class=\"rotate-box-1 square-icon wow zoomIn\" data-wow-delay=\"0.6s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-clock-o\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Crowdsourcing</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End rotate box-1 -->
    </section>
    <!-- End about section -->

    <!-- Begin social section -->
    <section id=\"social-section\">

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Rejoignez-nous</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">SUIVEZ-NOUS</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class=\"container\">
            <ul class=\"social-list\">
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.3s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-facebook\"></i></span></a></li>
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.4s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-twitter\"></i></span></a></li>
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.5s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-google-plus\"></i></span></a></li>
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.6s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-pinterest-p\"></i></span></a></li>
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.7s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-tumblr\"></i></span></a></li>
                <li> <a href=\"#\" class=\"rotate-box-1 square-icon text-center wow zoomIn\" data-wow-delay=\"0.8s\"><span class=\"rotate-box-icon\"><i class=\"fa fa-dribbble\"></i></span></a></li>                      
            </ul>
        </div>

    </section>
    <!-- End social section -->


    <!-- Begin counter up -->
    <section id=\"counter-section\">                \t\t\t\t\t
        <div id=\"counter-up-trigger\" class=\"counter-up text-white parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/chaisebusiness.jpg"), "html", null, true);
        echo ");\">
            <div class=\"cover\"></div>
            <!-- Begin page header-->
            <div class=\"page-header-wrapper\">
                <div class=\"container\">
                    <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                        <h2>Some Fun Facts</h2>
                        <div class=\"devider\"></div>
                        <p class=\"subtitle\">Before anyone is not told</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->
            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"fact text-center col-md-6 col-sm-12\">
                        <div class=\"fact-inner\">
                            <i class=\"fa fa-users fa-3x\"></i>
                            <div class=\"extra-space-l\"></div>
                            <span class=\"counter\">6666</span>
                            <p class=\"lead\">Submitters</p>
                        </div>
                    </div>

                    <div class=\"fact last text-center col-md-6 col-sm-12\">
                        <div class=\"fact-inner\">
                            <i class=\"fa fa-coffee fa-3x\"></i>
                            <div class=\"extra-space-l\"></div>
                            <span class=\"counter\">1100</span>
                            <p class=\"lead\">Solvers</p>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End counter up -->




";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 412,  380 => 316,  368 => 307,  356 => 298,  344 => 289,  332 => 280,  320 => 271,  308 => 262,  296 => 253,  284 => 244,  42 => 5,  39 => 4,  36 => 3,  11 => 2,);
    }
}

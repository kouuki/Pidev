<?php

/* PIDEVCrowdRiseBundle:Accueil:projet.html.twig */
class __TwigTemplate_00010da691645572031df422e8b7205bb6329f8e6b96e824cf6454f367ce361c extends Twig_Template
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
        echo "<section id=\"portfolio-section\" class=\"page bg-style1\">
            \t<div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portfolio\">
                                <!-- Begin page header-->
                                <div class=\"page\">
                                    <div class=\"container\">
                                        <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                            <h2>Our Works</h2>
                                            <div class=\"devider\"></div>
                                            <p class=\"subtitle\">What we are proud of</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div>
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
        // line 35
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
        // line 44
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
        // line 53
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
        // line 62
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
        // line 71
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
        // line 80
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
        // line 89
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
        // line 98
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
        // line 107
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
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Accueil:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 107,  156 => 98,  144 => 89,  132 => 80,  120 => 71,  108 => 62,  96 => 53,  84 => 44,  72 => 35,  39 => 4,  36 => 3,  11 => 2,);
    }
}

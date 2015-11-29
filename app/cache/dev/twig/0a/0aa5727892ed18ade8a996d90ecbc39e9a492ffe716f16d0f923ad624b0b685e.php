<?php

/* base.html.twig */
class __TwigTemplate_e4430be61c5c039ed2d0dcc7dc342d65bc0c1e344e7f97ba6dee0d07b4ffe218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad9fe3a7e251163ec746d6771e6cf9ba36ae5e61e34bd5e40573441db4633d3 = $this->env->getExtension("native_profiler");
        $__internal_bad9fe3a7e251163ec746d6771e6cf9ba36ae5e61e34bd5e40573441db4633d3->enter($__internal_bad9fe3a7e251163ec746d6771e6cf9ba36ae5e61e34bd5e40573441db4633d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body cz-shortcut-listen=\"true\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_bad9fe3a7e251163ec746d6771e6cf9ba36ae5e61e34bd5e40573441db4633d3->leave($__internal_bad9fe3a7e251163ec746d6771e6cf9ba36ae5e61e34bd5e40573441db4633d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_873939cd81430aa8ef38b9191f781d923ab1eaa4bcc434e9df59785f20a4b8b0 = $this->env->getExtension("native_profiler");
        $__internal_873939cd81430aa8ef38b9191f781d923ab1eaa4bcc434e9df59785f20a4b8b0->enter($__internal_873939cd81430aa8ef38b9191f781d923ab1eaa4bcc434e9df59785f20a4b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_873939cd81430aa8ef38b9191f781d923ab1eaa4bcc434e9df59785f20a4b8b0->leave($__internal_873939cd81430aa8ef38b9191f781d923ab1eaa4bcc434e9df59785f20a4b8b0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1f676ffe83c139d2ae12ced4436cfaf023808541c971911532eb99e99a852c7 = $this->env->getExtension("native_profiler");
        $__internal_b1f676ffe83c139d2ae12ced4436cfaf023808541c971911532eb99e99a852c7->enter($__internal_b1f676ffe83c139d2ae12ced4436cfaf023808541c971911532eb99e99a852c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/foundation-sites/dist/foundation.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_b1f676ffe83c139d2ae12ced4436cfaf023808541c971911532eb99e99a852c7->leave($__internal_b1f676ffe83c139d2ae12ced4436cfaf023808541c971911532eb99e99a852c7_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_55aecb408ac1f84570613298b1a15fd3073d9abe1c9c17d3307580a83b52bb7d = $this->env->getExtension("native_profiler");
        $__internal_55aecb408ac1f84570613298b1a15fd3073d9abe1c9c17d3307580a83b52bb7d->enter($__internal_55aecb408ac1f84570613298b1a15fd3073d9abe1c9c17d3307580a83b52bb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55aecb408ac1f84570613298b1a15fd3073d9abe1c9c17d3307580a83b52bb7d->leave($__internal_55aecb408ac1f84570613298b1a15fd3073d9abe1c9c17d3307580a83b52bb7d_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c42395378f529030545a711854819e6ec204a8266839a3d60bb1629196b05896 = $this->env->getExtension("native_profiler");
        $__internal_c42395378f529030545a711854819e6ec204a8266839a3d60bb1629196b05896->enter($__internal_c42395378f529030545a711854819e6ec204a8266839a3d60bb1629196b05896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/foundation-sites/dist/foundation.min.js"), "html", null, true);
        echo "\"></script>

            <script data-main=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/init"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/requirejs/require.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c42395378f529030545a711854819e6ec204a8266839a3d60bb1629196b05896->leave($__internal_c42395378f529030545a711854819e6ec204a8266839a3d60bb1629196b05896_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  118 => 19,  113 => 18,  107 => 17,  96 => 15,  87 => 9,  82 => 8,  76 => 7,  64 => 5,  55 => 23,  53 => 17,  50 => 16,  48 => 15,  42 => 12,  39 => 11,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/foundation-sites/dist/foundation.min.css') }}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body cz-shortcut-listen="true">*/
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/vendor/foundation-sites/dist/foundation.min.js') }}"></script>*/
/* */
/*             <script data-main="{{ asset('assets/js/init') }}" src="{{ asset('assets/vendor/requirejs/require.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* base.html.twig */
class __TwigTemplate_09d7e8fd748e6d4861df201ee60814ba19cd0b2a574413730ae2cef706d5b087 extends Twig_Template
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
        $__internal_3d212bbb8c2f339d853fac27b216ada6900c50da444f745292817a5df298d009 = $this->env->getExtension("native_profiler");
        $__internal_3d212bbb8c2f339d853fac27b216ada6900c50da444f745292817a5df298d009->enter($__internal_3d212bbb8c2f339d853fac27b216ada6900c50da444f745292817a5df298d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3d212bbb8c2f339d853fac27b216ada6900c50da444f745292817a5df298d009->leave($__internal_3d212bbb8c2f339d853fac27b216ada6900c50da444f745292817a5df298d009_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27bb0ec2f04fafe5093893192ff66461f371911728e1fedb314b072caa56a52c = $this->env->getExtension("native_profiler");
        $__internal_27bb0ec2f04fafe5093893192ff66461f371911728e1fedb314b072caa56a52c->enter($__internal_27bb0ec2f04fafe5093893192ff66461f371911728e1fedb314b072caa56a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_27bb0ec2f04fafe5093893192ff66461f371911728e1fedb314b072caa56a52c->leave($__internal_27bb0ec2f04fafe5093893192ff66461f371911728e1fedb314b072caa56a52c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d00a44bc8d98ab4e8ede8a600fd7cd1840398aeceb15a9d1d5b8a908c57d655 = $this->env->getExtension("native_profiler");
        $__internal_1d00a44bc8d98ab4e8ede8a600fd7cd1840398aeceb15a9d1d5b8a908c57d655->enter($__internal_1d00a44bc8d98ab4e8ede8a600fd7cd1840398aeceb15a9d1d5b8a908c57d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d00a44bc8d98ab4e8ede8a600fd7cd1840398aeceb15a9d1d5b8a908c57d655->leave($__internal_1d00a44bc8d98ab4e8ede8a600fd7cd1840398aeceb15a9d1d5b8a908c57d655_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_185d13ed50c43f2ff0d36ed040ec9489edf8e32a53dbcdce4812a97a095ca329 = $this->env->getExtension("native_profiler");
        $__internal_185d13ed50c43f2ff0d36ed040ec9489edf8e32a53dbcdce4812a97a095ca329->enter($__internal_185d13ed50c43f2ff0d36ed040ec9489edf8e32a53dbcdce4812a97a095ca329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_185d13ed50c43f2ff0d36ed040ec9489edf8e32a53dbcdce4812a97a095ca329->leave($__internal_185d13ed50c43f2ff0d36ed040ec9489edf8e32a53dbcdce4812a97a095ca329_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dce880cfe0fbc184d62c5a39b9737de7e8f428915fb45e1ed27d0d239610f09d = $this->env->getExtension("native_profiler");
        $__internal_dce880cfe0fbc184d62c5a39b9737de7e8f428915fb45e1ed27d0d239610f09d->enter($__internal_dce880cfe0fbc184d62c5a39b9737de7e8f428915fb45e1ed27d0d239610f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dce880cfe0fbc184d62c5a39b9737de7e8f428915fb45e1ed27d0d239610f09d->leave($__internal_dce880cfe0fbc184d62c5a39b9737de7e8f428915fb45e1ed27d0d239610f09d_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

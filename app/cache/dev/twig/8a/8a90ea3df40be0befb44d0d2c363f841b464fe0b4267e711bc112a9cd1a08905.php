<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e150685d14b9011ebc336e2eb4562bc7c188f69579c6dc411c49744bab945c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f941f246902dd66af061c2f1040c3ee77fcbbe7c502d9b5f8704afaf0f5664d3 = $this->env->getExtension("native_profiler");
        $__internal_f941f246902dd66af061c2f1040c3ee77fcbbe7c502d9b5f8704afaf0f5664d3->enter($__internal_f941f246902dd66af061c2f1040c3ee77fcbbe7c502d9b5f8704afaf0f5664d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f941f246902dd66af061c2f1040c3ee77fcbbe7c502d9b5f8704afaf0f5664d3->leave($__internal_f941f246902dd66af061c2f1040c3ee77fcbbe7c502d9b5f8704afaf0f5664d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1d221c124bc19fbe20c09254aea33cfb253f70e59768a857a53d009707daaf3 = $this->env->getExtension("native_profiler");
        $__internal_f1d221c124bc19fbe20c09254aea33cfb253f70e59768a857a53d009707daaf3->enter($__internal_f1d221c124bc19fbe20c09254aea33cfb253f70e59768a857a53d009707daaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1d221c124bc19fbe20c09254aea33cfb253f70e59768a857a53d009707daaf3->leave($__internal_f1d221c124bc19fbe20c09254aea33cfb253f70e59768a857a53d009707daaf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a59a7bb1811866b238aaf941dbc565f92cb6fb2cfa4b8bdb6f448389cf81dd95 = $this->env->getExtension("native_profiler");
        $__internal_a59a7bb1811866b238aaf941dbc565f92cb6fb2cfa4b8bdb6f448389cf81dd95->enter($__internal_a59a7bb1811866b238aaf941dbc565f92cb6fb2cfa4b8bdb6f448389cf81dd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a59a7bb1811866b238aaf941dbc565f92cb6fb2cfa4b8bdb6f448389cf81dd95->leave($__internal_a59a7bb1811866b238aaf941dbc565f92cb6fb2cfa4b8bdb6f448389cf81dd95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4f316a9b1effa15c8c0ed386857004c67146a64291637f3dc35f399780fe399 = $this->env->getExtension("native_profiler");
        $__internal_c4f316a9b1effa15c8c0ed386857004c67146a64291637f3dc35f399780fe399->enter($__internal_c4f316a9b1effa15c8c0ed386857004c67146a64291637f3dc35f399780fe399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c4f316a9b1effa15c8c0ed386857004c67146a64291637f3dc35f399780fe399->leave($__internal_c4f316a9b1effa15c8c0ed386857004c67146a64291637f3dc35f399780fe399_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

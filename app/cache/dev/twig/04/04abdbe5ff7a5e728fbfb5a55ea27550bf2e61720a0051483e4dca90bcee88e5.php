<?php

/* default/index.html.twig */
class __TwigTemplate_b73067e72dc94fc4c7ede2e5ad43548be9ee81085d1b583bd751bc6d05178afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1625fb6bf81a61aea242a34f89e763dfde9392f745b132d15c4abc6051071834 = $this->env->getExtension("native_profiler");
        $__internal_1625fb6bf81a61aea242a34f89e763dfde9392f745b132d15c4abc6051071834->enter($__internal_1625fb6bf81a61aea242a34f89e763dfde9392f745b132d15c4abc6051071834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1625fb6bf81a61aea242a34f89e763dfde9392f745b132d15c4abc6051071834->leave($__internal_1625fb6bf81a61aea242a34f89e763dfde9392f745b132d15c4abc6051071834_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4f52d0651258122f8f4d2905b356263e52938de11527e17cddf938d598c692f = $this->env->getExtension("native_profiler");
        $__internal_b4f52d0651258122f8f4d2905b356263e52938de11527e17cddf938d598c692f->enter($__internal_b4f52d0651258122f8f4d2905b356263e52938de11527e17cddf938d598c692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul class=\"accordion\" data-accordion=\"9sivji-accordion\" data-allow-all-closed=\"true\" role=\"tablist\">
      <li class=\"accordion-item is-active\">
        <a href=\"#\" class=\"accordion-title\" aria-controls=\"r6q7me-accordion\" role=\"tab\" id=\"r6q7me-accordion-label\" aria-expanded=\"true\" aria-selected=\"true\">Accordion 1</a>
        <div class=\"accordion-content\" data-tab-content=\"\" role=\"tabpanel\" aria-labelledby=\"r6q7me-accordion-label\" aria-hidden=\"false\" id=\"r6q7me-accordion\" style=\"display: block;\">
          Panel 1. Lorem ipsum dolor
        </div>
      </li>
      <li class=\"accordion-item\">
        <a href=\"#\" class=\"accordion-title\" aria-controls=\"a4qsq1-accordion\" role=\"tab\" id=\"a4qsq1-accordion-label\" aria-expanded=\"false\" aria-selected=\"false\">Accordion 2</a>
        <div class=\"accordion-content\" data-tab-content=\"\" role=\"tabpanel\" aria-labelledby=\"a4qsq1-accordion-label\" aria-hidden=\"true\" id=\"a4qsq1-accordion\">
          Panel 2. Lorem ipsum dolor
        </div>
      </li>
      <li class=\"accordion-item\">
        <a href=\"#\" class=\"accordion-title\" aria-controls=\"g2vm6e-accordion\" role=\"tab\" id=\"g2vm6e-accordion-label\" aria-expanded=\"false\" aria-selected=\"false\">Accordion 3</a>
        <div class=\"accordion-content\" data-tab-content=\"\" role=\"tabpanel\" aria-labelledby=\"g2vm6e-accordion-label\" aria-hidden=\"true\" id=\"g2vm6e-accordion\">
          Panel 3. Lorem ipsum dolor
        </div>
      </li>
    </ul>
";
        
        $__internal_b4f52d0651258122f8f4d2905b356263e52938de11527e17cddf938d598c692f->leave($__internal_b4f52d0651258122f8f4d2905b356263e52938de11527e17cddf938d598c692f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul class="accordion" data-accordion="9sivji-accordion" data-allow-all-closed="true" role="tablist">*/
/*       <li class="accordion-item is-active">*/
/*         <a href="#" class="accordion-title" aria-controls="r6q7me-accordion" role="tab" id="r6q7me-accordion-label" aria-expanded="true" aria-selected="true">Accordion 1</a>*/
/*         <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="r6q7me-accordion-label" aria-hidden="false" id="r6q7me-accordion" style="display: block;">*/
/*           Panel 1. Lorem ipsum dolor*/
/*         </div>*/
/*       </li>*/
/*       <li class="accordion-item">*/
/*         <a href="#" class="accordion-title" aria-controls="a4qsq1-accordion" role="tab" id="a4qsq1-accordion-label" aria-expanded="false" aria-selected="false">Accordion 2</a>*/
/*         <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="a4qsq1-accordion-label" aria-hidden="true" id="a4qsq1-accordion">*/
/*           Panel 2. Lorem ipsum dolor*/
/*         </div>*/
/*       </li>*/
/*       <li class="accordion-item">*/
/*         <a href="#" class="accordion-title" aria-controls="g2vm6e-accordion" role="tab" id="g2vm6e-accordion-label" aria-expanded="false" aria-selected="false">Accordion 3</a>*/
/*         <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="g2vm6e-accordion-label" aria-hidden="true" id="g2vm6e-accordion">*/
/*           Panel 3. Lorem ipsum dolor*/
/*         </div>*/
/*       </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* default/index.html.twig */
class __TwigTemplate_aa1d0cbc1f8dbf85ad634e83f0857a337fa060aaca90056b1289ed67284a69bd extends Twig_Template
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
        $__internal_6e5c8a27dc0cfca27e038325023bf304c3b20c400ea074d4d314a8699eb0fe59 = $this->env->getExtension("native_profiler");
        $__internal_6e5c8a27dc0cfca27e038325023bf304c3b20c400ea074d4d314a8699eb0fe59->enter($__internal_6e5c8a27dc0cfca27e038325023bf304c3b20c400ea074d4d314a8699eb0fe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5c8a27dc0cfca27e038325023bf304c3b20c400ea074d4d314a8699eb0fe59->leave($__internal_6e5c8a27dc0cfca27e038325023bf304c3b20c400ea074d4d314a8699eb0fe59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ada4709d4df95f52a186aa22c9d228acad3dc6690e450c1e41582d7fc6774e5 = $this->env->getExtension("native_profiler");
        $__internal_6ada4709d4df95f52a186aa22c9d228acad3dc6690e450c1e41582d7fc6774e5->enter($__internal_6ada4709d4df95f52a186aa22c9d228acad3dc6690e450c1e41582d7fc6774e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    BOOM
";
        
        $__internal_6ada4709d4df95f52a186aa22c9d228acad3dc6690e450c1e41582d7fc6774e5->leave($__internal_6ada4709d4df95f52a186aa22c9d228acad3dc6690e450c1e41582d7fc6774e5_prof);

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
/*     BOOM*/
/* {% endblock %}*/
/* */

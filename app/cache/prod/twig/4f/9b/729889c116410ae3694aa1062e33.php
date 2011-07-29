<?php

/* MyBlogBundle:Default:view.html.twig */
class __TwigTemplate_4f9b729889c116410ae3694aa1062e33 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "name", array(), "any", false), "html");
        echo "</h1>
<p><small>Created: ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'post'), "createdAt", array(), "any", false), "Y/m/d H:i"), "html");
        echo "</small></p>
<p><small>Updated: ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'post'), "updatedAt", array(), "any", false), "Y/m/d H:i"), "html");
        echo "</small></p>
<p>";
        // line 4
        echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "body", array(), "any", false), "html"));
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

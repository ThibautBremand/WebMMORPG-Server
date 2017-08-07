<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_39e4cb3e2cfdb1a6158e0b67a47e258a76af20e98f8078c381835cb15ea5a964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c3702a9c82636c5e9498008cfc4518fa91338958efb676af98dfd3cb9528f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3702a9c82636c5e9498008cfc4518fa91338958efb676af98dfd3cb9528f91->enter($__internal_9c3702a9c82636c5e9498008cfc4518fa91338958efb676af98dfd3cb9528f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3702a9c82636c5e9498008cfc4518fa91338958efb676af98dfd3cb9528f91->leave($__internal_9c3702a9c82636c5e9498008cfc4518fa91338958efb676af98dfd3cb9528f91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_776c70a003e17f54d405eddce3c06923b174b4ade0889102fec2360de88c4242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776c70a003e17f54d405eddce3c06923b174b4ade0889102fec2360de88c4242->enter($__internal_776c70a003e17f54d405eddce3c06923b174b4ade0889102fec2360de88c4242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Login</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\" />

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"col-md-9\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"col-md-9\"><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"\"><label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"\" /></span>
                    </div>

                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>

            <h4><a href=";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Go back to homepage</h4>
        </div>
    </div>
</div>
";
        
        $__internal_776c70a003e17f54d405eddce3c06923b174b4ade0889102fec2360de88c4242->leave($__internal_776c70a003e17f54d405eddce3c06923b174b4ade0889102fec2360de88c4242_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 33,  85 => 29,  77 => 24,  70 => 20,  66 => 19,  60 => 16,  56 => 15,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Login</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" class=\"form-control\" />

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"username\">{{ 'security.login.username'|trans }}</label></span>
                        <span class=\"col-md-9\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"password\">{{ 'security.login.password'|trans }}</label></span>
                        <span class=\"col-md-9\"><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"\"><label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label></span>
                        <span class=\"\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"\" /></span>
                    </div>

                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
            </div>

            <h4><a href={{ path(\"index\") }}>Go back to homepage</h4>
        </div>
    </div>
</div>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\Git\\os-server\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}

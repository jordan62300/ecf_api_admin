<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_032ab7d06f325a7fafb971cfcf62143c4762b52182059ce683464f055c5eafd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions_wrapper' => [$this, 'block_global_actions_wrapper'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_help' => [$this, 'block_content_help'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", []), "locale", []), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) {
            // line 34
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-rtl.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "    </head>

    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 186
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">

            <style>
                :root { --color-primary: ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color"), "html", null, true);
        echo "; }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_head_favicon($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 25
        echo "            ";
        $context["favicon"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.favicon");
        // line 26
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 26, $this->source); })()), "mime_type", []), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 26, $this->source); })()), "path", [])), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_head_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 30
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <script>
            document.body.classList.add(
                'easyadmin-content-width-' + (localStorage.getItem('easyadmin/content/width') || 'normal'),
                'easyadmin-sidebar-width-' + (localStorage.getItem('easyadmin/sidebar/width') || 'normal')
            );
        </script>

        <div class=\"wrapper\">
        ";
        // line 48
        $this->displayBlock('wrapper', $context, $blocks);
        // line 177
        echo "        </div>

        ";
        // line 179
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 180
        echo "
        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 182
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "    </body>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body_id($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_wrapper($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 49
        echo "            <header class=\"main-header\">
                ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 111
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 114
        $this->displayBlock('sidebar', $context, $blocks);
        // line 126
        echo "            </aside>

            <div class=\"content-wrapper\">
                ";
        // line 129
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 132
        echo "
                <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "
                <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 51
        echo "                    <nav class=\"navbar\" role=\"navigation\">
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-bars\"></i>
                        </button>

                        <div id=\"header-logo\">
                            ";
        // line 57
        $this->displayBlock('header_logo', $context, $blocks);
        // line 62
        echo "                        </div>
                    </nav>

                    ";
        // line 65
        $context["_user_name"] = _twig_default_filter($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "user", []), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.name_property_path")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"));
        // line 66
        echo "                    ";
        $context["_logout_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getLogoutPath();
        // line 67
        echo "                    ";
        $context["_user_has_logout"] =  !twig_test_empty((isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 67, $this->source); })()));
        // line 68
        echo "                    ";
        $context["_user_is_impersonated"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN");
        // line 69
        echo "                    ";
        ob_start();
        // line 70
        echo "                        <div class=\"popover-content-section user-details ";
        echo ((((isset($context["_user_has_logout"]) || array_key_exists("_user_has_logout", $context) ? $context["_user_has_logout"] : (function () { throw new Twig_Error_Runtime('Variable "_user_has_logout" does not exist.', 70, $this->source); })()) || (isset($context["_user_is_impersonated"]) || array_key_exists("_user_is_impersonated", $context) ? $context["_user_is_impersonated"] : (function () { throw new Twig_Error_Runtime('Variable "_user_is_impersonated" does not exist.', 70, $this->source); })()))) ? ("user-has-actions") : (""));
        echo "\">
                            <p class=\"small text-muted mb-0\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                            <p class=\"user-details-name\">
                                ";
        // line 73
        if ((((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), false)) : (false)) == false)) {
            // line 74
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                ";
        } else {
            // line 76
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["_user_name"]) || array_key_exists("_user_name", $context) ? $context["_user_name"] : (function () { throw new Twig_Error_Runtime('Variable "_user_name" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "
                                ";
        }
        // line 78
        echo "                            </p>
                        </div>

                        ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 93
        echo "                    ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 94
        echo "
                    <div class=\"content-top navbar-custom-menu\">
                        <div class=\"user user-menu-wrapper ";
        // line 96
        echo (((isset($context["_user_is_impersonated"]) || array_key_exists("_user_is_impersonated", $context) ? $context["_user_is_impersonated"] : (function () { throw new Twig_Error_Runtime('Variable "_user_is_impersonated" does not exist.', 96, $this->source); })())) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, (isset($context["_user_menu_content"]) || array_key_exists("_user_menu_content", $context) ? $context["_user_menu_content"] : (function () { throw new Twig_Error_Runtime('Variable "_user_menu_content" does not exist.', 96, $this->source); })()), "html_attr");
        echo "\" data-html=\"true\">
                            ";
        // line 97
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_avatar")) {
            // line 98
            echo "                                ";
            $context["_avatar_image_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "user", []), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.avatar_property_path"));
            // line 99
            echo "                                ";
            if ((null == (isset($context["_avatar_image_path"]) || array_key_exists("_avatar_image_path", $context) ? $context["_avatar_image_path"] : (function () { throw new Twig_Error_Runtime('Variable "_avatar_image_path" does not exist.', 99, $this->source); })()))) {
                // line 100
                echo "                                    <i class=\"fa ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", []))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                ";
            } else {
                // line 102
                echo "                                    <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["_avatar_image_path"]) || array_key_exists("_avatar_image_path", $context) ? $context["_avatar_image_path"] : (function () { throw new Twig_Error_Runtime('Variable "_avatar_image_path" does not exist.', 102, $this->source); })()), "html", null, true);
                echo "\" />
                                ";
            }
            // line 104
            echo "                            ";
        }
        // line 105
        echo "                            ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_name")) {
            // line 106
            echo "                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, (isset($context["_user_name"]) || array_key_exists("_user_name", $context) ? $context["_user_name"] : (function () { throw new Twig_Error_Runtime('Variable "_user_name" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 108
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_header_logo($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 58
        echo "                                <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                            ";
        if (((isset($context["_user_has_logout"]) || array_key_exists("_user_has_logout", $context) ? $context["_user_has_logout"] : (function () { throw new Twig_Error_Runtime('Variable "_user_has_logout" does not exist.', 82, $this->source); })()) || (isset($context["_user_is_impersonated"]) || array_key_exists("_user_is_impersonated", $context) ? $context["_user_is_impersonated"] : (function () { throw new Twig_Error_Runtime('Variable "_user_is_impersonated" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "                                <div class=\"popover-content-section user-menu\">
                                    ";
            // line 84
            if ((isset($context["_user_has_logout"]) || array_key_exists("_user_has_logout", $context) ? $context["_user_has_logout"] : (function () { throw new Twig_Error_Runtime('Variable "_user_has_logout" does not exist.', 84, $this->source); })())) {
                // line 85
                echo "                                        <a class=\"user-action user-action-logout\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 87
            echo "                                    ";
            if ((isset($context["_user_is_impersonated"]) || array_key_exists("_user_is_impersonated", $context) ? $context["_user_is_impersonated"] : (function () { throw new Twig_Error_Runtime('Variable "_user_is_impersonated" does not exist.', 87, $this->source); })())) {
                // line 88
                echo "                                        <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 90
            echo "                                </div>
                            ";
        }
        // line 92
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 115
        echo "                <section class=\"sidebar\">
                    ";
        // line 116
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 123
        echo "                </section>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 117
        echo "                        ";
        echo twig_include($this->env, $context, [0 => ((        // line 118
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 118, $this->source); })()), "templates", []), "menu", [])) : ("")), 1 => $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"]);
        // line 121
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_flash_messages($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 130
        echo "                    ";
        echo twig_include($this->env, $context, (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 130, $this->source); })()), "templates", []), "flash_messages", [])) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "                    <div class=\"content\">
                        ";
        // line 137
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 161
        echo "
                        <section id=\"main\" class=\"content-body\">
                            ";
        // line 163
        $this->displayBlock('main', $context, $blocks);
        // line 164
        echo "                        </section>

                        ";
        // line 166
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 171
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 138
        echo "                        ";
        $context["_has_content_help"] = ((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 138, $this->source); })()), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 138, $this->source); })()), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array"), false)) : (false)));
        // line 139
        echo "                        <section class=\"content-header ";
        echo (((isset($context["_has_content_help"]) || array_key_exists("_has_content_help", $context) ? $context["_has_content_help"] : (function () { throw new Twig_Error_Runtime('Variable "_has_content_help" does not exist.', 139, $this->source); })())) ? ("has-content-help") : (""));
        echo "\">
                            ";
        // line 140
        $this->displayBlock('content_header', $context, $blocks);
        // line 159
        echo "                        </section>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 141
        echo "                                <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                    <div class=\"content-header-title\">
                                        <h1 class=\"title\">";
        // line 143
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                    </div>

                                    ";
        // line 146
        $this->displayBlock('global_actions_wrapper', $context, $blocks);
        // line 149
        echo "                                </div>

                                ";
        // line 151
        $this->displayBlock('content_help', $context, $blocks);
        // line 158
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_content_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_global_actions_wrapper($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions_wrapper"));

        // line 147
        echo "                                        <div class=\"global-actions\">";
        $this->displayBlock('global_actions', $context, $blocks);
        echo "</div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_global_actions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_content_help($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 152
        echo "                                    ";
        if (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 152, $this->source); })()), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 152, $this->source); })()), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array", false, true), "help", [], "array"), false)) : (false)))) {
            // line 153
            echo "                                        <div class=\"content-header-help\">
                                            ";
            // line 154
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 154, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 154, $this->source); })()), "request", []), "query", []), "get", [0 => "action"], "method"), [], "array"), "help", [], "array"), array(), twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 154, $this->source); })()), "translation_domain", []));
            echo "
                                        </div>
                                    ";
        }
        // line 157
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 167
        echo "                            <section class=\"content-footer\">
                                ";
        // line 168
        $this->displayBlock('content_footer', $context, $blocks);
        // line 169
        echo "                            </section>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 179
    public function block_body_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 179,  874 => 168,  863 => 169,  861 => 168,  858 => 167,  849 => 166,  832 => 163,  822 => 157,  816 => 154,  813 => 153,  810 => 152,  801 => 151,  772 => 147,  763 => 146,  746 => 143,  736 => 158,  734 => 151,  730 => 149,  728 => 146,  722 => 143,  718 => 141,  709 => 140,  698 => 159,  696 => 140,  691 => 139,  688 => 138,  679 => 137,  668 => 171,  666 => 166,  662 => 164,  660 => 163,  656 => 161,  654 => 137,  651 => 136,  642 => 135,  629 => 130,  620 => 129,  609 => 121,  607 => 118,  605 => 117,  596 => 116,  584 => 123,  582 => 116,  579 => 115,  570 => 114,  560 => 92,  556 => 90,  550 => 88,  547 => 87,  539 => 85,  537 => 84,  534 => 83,  531 => 82,  522 => 81,  509 => 59,  500 => 58,  491 => 57,  479 => 108,  473 => 106,  470 => 105,  467 => 104,  461 => 102,  455 => 100,  452 => 99,  449 => 98,  447 => 97,  441 => 96,  437 => 94,  434 => 93,  432 => 81,  427 => 78,  421 => 76,  415 => 74,  413 => 73,  408 => 71,  403 => 70,  400 => 69,  397 => 68,  394 => 67,  391 => 66,  389 => 65,  384 => 62,  382 => 57,  374 => 51,  365 => 50,  352 => 173,  350 => 135,  345 => 132,  343 => 129,  338 => 126,  336 => 114,  331 => 111,  329 => 50,  326 => 49,  317 => 48,  284 => 39,  273 => 184,  264 => 182,  260 => 181,  257 => 180,  255 => 179,  251 => 177,  249 => 48,  234 => 39,  225 => 38,  212 => 30,  203 => 29,  188 => 26,  185 => 25,  176 => 24,  163 => 16,  156 => 13,  147 => 12,  129 => 10,  118 => 186,  116 => 38,  112 => 36,  106 => 34,  104 => 33,  101 => 32,  99 => 29,  96 => 28,  94 => 24,  91 => 23,  82 => 21,  78 => 20,  75 => 19,  73 => 12,  68 => 10,  57 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/app.css') }}\">

            <style>
                :root { --color-primary: {{ easyadmin_config('design.brand_color') }}; }
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            <script src=\"{{ asset('bundles/easyadmin/app.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/app-rtl.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin {% block body_class %}{% endblock %}\">
        <script>
            document.body.classList.add(
                'easyadmin-content-width-' + (localStorage.getItem('easyadmin/content/width') || 'normal'),
                'easyadmin-sidebar-width-' + (localStorage.getItem('easyadmin/sidebar/width') || 'normal')
            );
        </script>

        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
                {% block header %}
                    <nav class=\"navbar\" role=\"navigation\">
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-bars\"></i>
                        </button>

                        <div id=\"header-logo\">
                            {% block header_logo %}
                                <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                    {{ easyadmin_config('site_name')|raw }}
                                </a>
                            {% endblock header_logo %}
                        </div>
                    </nav>

                    {% set _user_name = easyadmin_read_property(app.user, easyadmin_config('user.name_property_path'))|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) %}
                    {% set _logout_path = easyadmin_logout_path() %}
                    {% set _user_has_logout = _logout_path is not empty %}
                    {% set _user_is_impersonated = is_granted('ROLE_PREVIOUS_ADMIN') %}
                    {% set _user_menu_content %}
                        <div class=\"popover-content-section user-details {{ _user_has_logout or _user_is_impersonated ? 'user-has-actions' }}\">
                            <p class=\"small text-muted mb-0\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</p>
                            <p class=\"user-details-name\">
                                {% if app.user|default(false) == false %}
                                    {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                {% else %}
                                    {{ _user_name }}
                                {% endif %}
                            </p>
                        </div>

                        {% block user_menu %}
                            {% if _user_has_logout or _user_is_impersonated %}
                                <div class=\"popover-content-section user-menu\">
                                    {% if _user_has_logout %}
                                        <a class=\"user-action user-action-logout\" href=\"{{ _logout_path }}\">{{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                    {% endif %}
                                    {% if _user_is_impersonated %}
                                        <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">{{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                    {% endif %}
                                </div>
                            {% endif %}
                        {% endblock user_menu %}
                    {% endset %}

                    <div class=\"content-top navbar-custom-menu\">
                        <div class=\"user user-menu-wrapper {{ _user_is_impersonated ? 'user-is-impersonated' }}\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"{{ _user_menu_content|e('html_attr') }}\" data-html=\"true\">
                            {% if easyadmin_config('user.display_avatar') %}
                                {% set _avatar_image_path = easyadmin_read_property(app.user, easyadmin_config('user.avatar_property_path')) %}
                                {% if null == _avatar_image_path %}
                                    <i class=\"fa {{ app.user is not null ? 'fa-user-circle' : 'fa-user-times' }} user-avatar\"></i>
                                {% else %}
                                    <img class=\"user-avatar\" src=\"{{ _avatar_image_path }}\" />
                                {% endif %}
                            {% endif %}
                            {% if easyadmin_config('user.display_name') %}
                                <span class=\"user-name\">{{ _user_name }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>

            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                {% block content %}
                    <div class=\"content\">
                        {% block content_header_wrapper %}
                        {% set _has_content_help = _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <section class=\"content-header {{ _has_content_help ? 'has-content-help' }}\">
                            {% block content_header %}
                                <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                    <div class=\"content-header-title\">
                                        <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                                    </div>

                                    {% block global_actions_wrapper %}
                                        <div class=\"global-actions\">{% block global_actions %}{% endblock %}</div>
                                    {% endblock %}
                                </div>

                                {% block content_help %}
                                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                                        <div class=\"content-header-help\">
                                            {{ _entity_config[app.request.query.get('action')]['help']|trans(domain = _entity_config.translation_domain)|raw }}
                                        </div>
                                    {% endif %}
                                {% endblock content_help %}
                            {% endblock content_header %}
                        </section>
                        {% endblock content_header_wrapper %}

                        <section id=\"main\" class=\"content-body\">
                            {% block main %}{% endblock %}
                        </section>

                        {% block content_footer_wrapper %}
                            <section class=\"content-footer\">
                                {% block content_footer %}{% endblock %}
                            </section>
                        {% endblock %}
                    </div>
                {% endblock content %}

                <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\Users\\jorda\\Documents\\perso\\ecf_admin_sql\\ECF\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}

<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_509c8965f39a7d4fba49b17feeca5376 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
";
        }
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
//<![CDATA[
(function (\$, undefined) {
    var tinymce_options = ";
        // line 9
        echo $this->getContext($context, "tinymce_config_json");
        echo ",
        textarea = 'textarea";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "textarea_class"), "html", null, true);
        echo "';

    \$(function () {
        \$(textarea).each(function () {
            var \$textarea = \$(this),
                theme = \$textarea.data('theme');

            if (!theme || !tinymce_options.theme[theme]) {
                theme = 'simple';
            }

            var options = tinymce_options.theme[theme];

            options.script_url = '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "';

            // workaround for an incompatibility with html5-validation (see: http://git.io/CMKJTw)
            if (\$textarea.is('[required]')) {
                options.oninit = function (editor) {
                    editor.onChange.add(function (ed, l) {
                        ed.save();
                    });
                };
            }
            \$textarea.tinymce(options);
        });
    });
}(jQuery));
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

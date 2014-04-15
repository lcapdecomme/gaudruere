<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_6f7c0b8cd73624b77189ab28475e290e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"coresphere-console\" style=\"display: none; top:20px; position: absolute; width: 100%;\"></div>

<span id=\"coresphere-console-click\" style=\"display:block; position: fixed; bottom:10px; right:50px; z-index: 6000001;\">
\t<img
    \talt=\"Show console\"
        style=\"cursor: pointer; width: 20px\"
        src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAAlFJREFUeJylk7FrFFEQxn/z3tu9Z3bvchBIQBEsrCSEdEKMhWWE2EUrq5AyBP8IJUUCIvgX2NkIqWw02AkWkaRILV5ySXMJCefe7tv3noXcYkhh4cDHwMwwMx/zDfynycLCwpPt7e0309PTXe99k4gxAtBut6/EYoxorTk8PDxfXV19rjc3N98tLS3dGw6HNs9zm2WZnZiYaKCUslrrBiJiRcTOzs52T05OctPtdpN+v8/LV6+Yn5/nbDCg1WqhlLq+rghFUXB6esrW1hbWWmtijEGA2bk5Hj56xPe9Pfb39vg1HF5rEmMkhMDU1BTOOeq6DkYpRZqm7H76xM3bt3n29Cm9Xo+D/X2stde28N4jIlxeXuK9x2itKYqCW3fuEGNkfX2db1+/MhwOUSLYGzdQShFjbCiUZYn3Hq01RilFu9Phw/v3vH39Gpum3H/wgMfLy1Qh8PnjR456PQDqumYwGJBlWUPJACilcFUFMZKkKUc/f/Jld5cInJ2dEULAOUdRFDjnEBHqukZE/lAQEfI8xzlHp9MhhsBJv48SIU0SJicnKcsSYwxVVaG1ZqwZIyKICFmW4Zyj3W5jrSVJEkSEGCPOOUajEcYYRqMRrVbraoMQAnVdE0JAKYUxhiRJrkxyzgEQQmjqAYzW2qRpytraGlVVNdPH1EIIVFVFWZaUZcnFxQUzMzPjc2pzcHDwY3FxcW5jY+OKYOq6buC9b7z3nqqqcM5xfHw8kE6nc3dlZeVFnudd730cq+1v5Y0faxwXETk/P7/Y2dl5849n/bf9Bv1DPYZYR4JBAAAAAElFTkSuQmCC\"
\t/>

\t<div id=\"coresphere-console\" style=\"display:none; position:absolute;right:0px;width:80%;\"></div>
</span>

<script type=\"text/javascript\">
\twindow.jQuery || document.write('<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.6.2.min.js"), "html", null, true);
        echo "\"><\\/script>');
</script>

<script type=\"text/javascript\">
\tjQuery(function () {
    \t\$('#coresphere-console-click').click(function() {
        \t\$console = \$('#coresphere-console');

\t\t\tif (\$console.is(':visible')) {
\t\t\t\t\$console.hide();
\t\t\t} else {
    \t\t\tif (!\$console.html()) {
    \t\t\t\t\$console.load(\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("console", array("raw" => true)), "html", null, true);
        echo "\");
    \t\t\t}
    \t\t\t\$console.show();
\t\t\t}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

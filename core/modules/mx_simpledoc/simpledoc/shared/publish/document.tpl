<?php
$lang['TOC'] = 'Contents';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php echo $title; ?></title>
    <style type="text/css">
	pre { background-color: #eeeeee; padding: 0.75em 1.5em; border: 1px solid #dddddd; }
	.contents { float: right; background-color: #eeeeee; padding: 0.75em; margin: 0 0 0.75em 0.75em; border: 1px solid #dddddd; }
	.contents ul { list-style: none; margin-left: 1.2em; margin-right: 0.75em; margin-bottom: 0; padding: 0;list-style: none; margin-left: 0.5em; margin-right: 0.9em; margin-bottom: 2px; margin-top: 0px; padding: 5px; text-indent: -0.9em; }
	.contents a { color: #000000; text-decoration: none; }
	.contents a:hover { color: #000000; text-decoration: underline; cursor: hand; }

	body { max-height:100% height: 100%; margin: 0px 15px 0px 0px; padding: 30px 30px 30px 30px; background-color: #ffffff; font-family: georgia, tahoma, verdana; font-size: 11px;  color: #000000; cursor: default;}
    </style>
</head>
<body>

<div id="contents"></div>
<div id="sectioncontents"></div>
<script type="text/javascript">
// this snippet doesn't work if there is a folder named "html"
window.onload = function() {
    var contents = "";
    <?php if (isset($tree)): ?>
    var link = document.location.href;
    link = link.replace(/\\/g, "/");
    link = link.substr(0, link.lastIndexOf("html/")) + "index.html?" + link.substr(link.lastIndexOf("html/")+"html/".length);
    contents = '<div><a target="_blank" href="'+link+'">Permanent Link to this page</a></div>';
    <?php endif; ?>
    var all = document.body.childNodes;
    var contents2 = "";
    var text = "";
    var found = false;
    var h3 = false;
    contents2 += '<b><?php echo $lang['TOC']; ?></b><ul>';
    for (var i = 0; i < all.length; ++i) {
        if (all[i].nodeName == "H2" || all[i].nodeName == "H3") {
            if (all[i].nodeName == "H2") {
                if (h3) contents2 += '</ul>';
                h3 = false;
            }
            if (all[i].nodeName == "H3") {
                if (!h3) contents2 += '<ul>';
                h3 = true;
            }
            found = true;
            text = all[i].innerHTML.replace(/<[^>]+>/g,"");
            all[i].innerHTML = '<a name="'+text+'">'+text+'</a>';
            contents2 += '<li><a href="#'+text+'">'+text+'</a></li>';
        }
    }
    contents2 += '</ul>';
    if (found) {
        if (contents) contents += '<br>';
        contents += contents2;
    }
    if (contents) {
        document.getElementById("contents").className = "contents";
        document.getElementById("contents").innerHTML = contents;
    }
}
</script>
		<?php echo $html; ?>

		<hr align="left">

		<!-- Please, do not remove this -->
		<p>Generated by <a href="http://www.mx-publisher.com/">MX-Publisher</a> | <a href="http://gosu.pl/php/simpledoc.html">SimpleDoc</a> on <?php echo date('Y-m-d H:i:s').' '.$this->getTimezone(); ?></p>

</body>
</html>

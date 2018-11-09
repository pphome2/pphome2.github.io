<?php


include("config/config.php");
include("config/$LANGFILE");
include("$HEADER");
include("$CSS2");
include("$JS_BEGIN");


echo("<center>");
echo("<img src=back.jpg style='width:60%'>");
echo("</center>");
echo("<div class=spaceline50></div>");

echo("<div class=row>");

echo("<div class=column3>");
echo("<div class=columnspace>");
    echo("<center>");
	echo("<img src=world.png style='width:30%'><br />");
	echo("<b>Weboldalak</b>");
    echo("</center>");
    echo("<p>");
        echo("Internetes megjelenés tervezése, weboldalak építése, webáruházak előkészítése, üzemeltetése. ");
        echo("Nem egyszerű feladat egy vállalat életében új kommunikációs csatornák nyitása ");
        echo("az ügyfelek felé. A feladat összetett, ehhez sokszor kell hozzáértő segíséget ");
        echo("kérni. Mindebben itt a segítség.");
    echo("<p>");
echo("</div>");
echo("</div>");

echo("<div class=column3>");
echo("<div class=columnspace>");
    echo("<center>");
	echo("<img src=molecular.png style='width:30%'><br />");
	echo("<b>Alkalmazás fejlesztés</b>");
    echo("</center>");
    echo("<p>");
	echo("Egy vállalat életében számos olyan feladat merül fel, amelyekre nincs kész program. ");
	echo("Alkalmazások fejlesztésével egyedi, a konkrét igény kielégítésére készülő megoldás készül ");
	echo("kizárólag Önnek.");
    echo("</p>");
echo("</div>");
echo("</div>");

echo("<div class=column3>");
echo("<div class=columnspace>");
    echo("<center>");
	echo("<img src=community.png style='width:30%'><br />");
	echo("<b>Rendszer üzemeltetés</b>");
    echo("</center>");
    echo("<p>");
	echo("Az informatikai feladatok elvégzése kisebb válllatok életében nem minden esetben ");
	echo("kívánják szakember alkalmazását. ");
	echo("Érdemes megfontolni külső segítség bevonását, hogy a feladatok távolról, gyorsan ");
	echo("elvégzésre kerüljenek.");
    echo("</p>");
echo("</div>");
echo("</div>");

echo("</div>");



echo("<div class=spaceline50></div>");

echo("<div class=row>");

echo("Elérhetőség e-mail-en: <a href=mailto:pphome2@gmail.com>pphome2 @ gmail.com</a>");

echo("</div>");





include("$JS_END");
include("$FOOTER");


?>
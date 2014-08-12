Solomo Chat
===========

Super-einfaches Chat-Programm zur Einbindung in mobile Seiten. 
Würde man heutzutage mit Nodes machen: Ajax im Javascript-Interval. 
Sitzung und Anzeige-Name können mit URL-Parametern vorgegeben werden. 

[Solomo-Funktionen](https://github.com/sefzig/solomo/blob/master/README.md) 
* [solomo-chat](https://github.com/sefzig/solomo-chat/blob/master/README.md) 
* [solomo-daumen](https://github.com/sefzig/solomo-daumen/blob/master/README.md) 
* [solomo-druck](https://github.com/sefzig/solomo-druck/blob/master/README.md) 
* [solomo-konfig](https://github.com/sefzig/solomo-konfig/blob/master/README.md) 

Links
* [Demo der Sitzung "gh"](http://sefzig.net/solomo/chat/?sitzung=gh&name=Daniel%20Tester) 
* [Druckvorlage für die Sitzung "gh"](http://sefzig.net/solomo/druck/?zahler=0&prefix=gh&korrektur=L&zeilen=6&spalten=4&template=standard&konfig=0&cta=Sprich%20mit%20uns!&url=http://sefzig.net/solomo/chat/?sitzung=) 

## URL-Parameter

Die Einbindung kann mit URL-Parametern gesteuert werden:

<pre>
http://sefzig.net/solomo/chat/
?sitzung= // Vorgegebenes Kürzel des Chatraums, Zufallszahl wenn leer
&name=    // Vorgegebener Name des Teilnehmers, Eingabe-Aufforderung wenn leer
</pre>

## Einrichtung

* Das Verzeichnis "daten" muss chmod777 sein.

<?php
require("shared.inc");
commonHeader("Documentation ");
?>

<H1>PHP FAQ</H1>
<ul>
<li>The <a href="FAQ.php">PHP FAQ</a> is your first stop for general
    information and those questions that seem to be on most people's minds.

</ul>

<H1>The PHP Manual On-line</H1>
<ul>
<li><a href="manual/">PHP Manual Online</a>. Your reference
    to everything that's great about PHP.

<li><a href="manual/html/">Plain HTML PHP Manual Online</a>. The very
    same manual in a light-weight, HTML 3.2 version without any bells or
    whistles.

<li><a href="http://snaps.php.net/manual/">Latest Version and Internation Versions</a>.
    Depending on how industrious the documentation team has been, you may find more
    up-to-date info in this version of the manual than you will at one of the above
    links.  You can also browse or download translated versions here.
</ul>

<H2>PHP Annotated Manuals</H2>
<ul>
<LI><A href="http://www.php.net/manual/">PHP Annotated Manual</A>. This
    is the same as the above, except there is a built-in errata/note system
    that users all around the world can (and have!) contributed to. Of
    all of the documentation, this will be the most current version,
    as it is updated (and annotated) daily.

<LI><A href="http://www.php.net/manual/browse-errata.php3">PHP Manual
    Errata</A>. This is the collected errata from the on-line errata/note
    system.
</ul>

<H1>Downloadable PHP Manuals</H1>
<H2>HTML Version</H2>
<ul>
<li><?php download_link("bigmanual.html", "PHP HTML Manual (one BIG file)"); ?>
<li><?php download_link("manual.zip", "PHP HTML Manual ZIP File"); ?>
<li><?php download_link("manual.tar.gz", "PHP HTML Manual .tar.gz File"); ?>
</ul>
<H2>Latest versions (daily snapshots)</H2>
<ul>
<li><?php download_link("http://snaps.php.net/manual/manual-en-current.tar.gz", "PHP HTML Manual (English) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-de-current.tar.gz", "PHP HTML Manual (German) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-it-current.tar.gz", "PHP HTML Manual (Italian) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-ja-current.tar.gz", "PHP HTML Manual (Japanese) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-fr-current.tar.gz", "PHP HTML Manual (French) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-es-current.tar.gz", "PHP HTML Manual (Spanish) .tar.gz File"); ?>
<li><?php download_link("http://snaps.php.net/manual/manual-hu-current.tar.gz", "PHP HTML Manual (Hungarian) .tar.gz File"); ?>
</ul>
<H2>WinHelp (CHM) versions (January 12, 2001)</H2>
<ul>
<li><?php download_link("manual.chm", "PHP Manual (English)"); ?>
<li><?php download_link("manual_de.chm", "PHP Manual (German)"); ?>
<li><?php download_link("manual_it.chm", "PHP Manual (Italian)"); ?>
<li><?php download_link("manual_nl.chm", "PHP Manual (Dutch)"); ?>
<li><?php download_link("manual_fr.chm", "PHP Manual (French)"); ?>
<li><?php download_link("manual_es.chm", "PHP Manual (Spanish)"); ?>
<li><?php download_link("manual_hu.chm", "PHP Manual (Hungarian)"); ?>
<li><?php download_link("manual_pt_BR.chm", "PHP Manual (Portugese)"); ?>
</ul>

<H2>PDF Versions (February 04, 2001)</H2>
<ul>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-cs.pdf", "PHP PDF Manual (Czech)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-nl.pdf", "PHP PDF Manual (Dutch)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-en.pdf", "PHP PDF Manual (English)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-fr.pdf", "PHP PDF Manual (French)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-de.pdf", "PHP PDF Manual (German)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-hu.pdf", "PHP PDF Manual (Hungarian)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-it.pdf", "PHP PDF Manual (Italian)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-pt_BR.pdf", "PHP PDF Manual (Portuguese)"); ?>
<li><?php download_link("http://snaps.php.net/~jah/pdf/manual-es.pdf", "PHP PDF Manual (Spanish)"); ?>
</ul>

<H2>Other Versions</H2>
<ul>
<li><?php download_link("manual.rtf", "PHP Manual RTF File"); ?>
<li><?php download_link("manual_isilo.pdb","PHP Manual - PalmPilot Isilo format"); ?>
<li><?php download_link("manual_doc.pdb","PHP Manual - PalmPilot DOC format"); ?>
</ul>

<H1>Translations</H1>
<ul>
<li><a href="http://www.cityfujisawa.ne.jp/~louis/apps/phpfi/index.html"
    >Japanese translation of the PHP manual</a>

<li><a href="http://dev.nexen.net/docs/php/annotee/manuel_toc.php">Version fran&ccedil;aise annot&eacute;e.</a><br>
Versions t&eacute;l&eacute;chargeables <a href="http://dev.nexen.net/docs/php/chargement.html">disponibles</a>. (PDF, HTML, doc, ps, palm).
</ul>

<H1>More information</H1>
<ul>
<li><a href="http://zugeschaut-und-mitgebaut.de/php/">PHP Function Table</a>.
    This page has a overview about which pages are translated to the
	different languages and in which versions of PHP the functions
	are available.

<li><a href="books.php">Books on PHP</A>. Here you can find a
    great selection of books on PHP and related themes.

<li>License questions?  See the <a href="/license/#FAQ">License FAQ</a></li>	
</ul>

<H1>CVS Account</H1>
<ul>
<li><a href="anoncvs.php">CVS instructions</a></li>
<li><A href="/cvs-php.php">Getting a CVS account</a>.  If you wish to help out
with the development of PHP, read this.
</ul>

<H1>Old/unsupported information</H1>
<ul>
<li><a href="manual/phpfi2.html">PHP/FI 2.0 Manual</a>. This includes
    discussions on a few topics that aren't covered in the PHP 3 manual
    yet.
</ul>


<? commonFooter("") ?>

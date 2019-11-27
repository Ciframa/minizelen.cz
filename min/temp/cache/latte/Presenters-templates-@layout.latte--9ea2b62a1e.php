<?php
// source: /hosting/www/minizelen.cz/app/Presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template9ea2b62a1e extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */ ?>/dist/css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/63027296a0.js" crossorigin="MrvGOD"></script>
    <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */ ?>/dist/css/fonts.css" type="text/css">

    <title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?>Minizelen.cz</title>
</head>

<body>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>    <div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 15 */ ?></div>
<?php
			$iterations++;
		}
?>
    <div class="uvitani">
        <div class="kontakt">
            <p>Kontaktujte nás</p>
            <a href="mailto:info@minizelen.cz">info@minizelen.cz</a>
        </div>
        <div class="ikonky">
            <a target="_blank" href="https://www.instagram.com/minizelen.cz/"><i class="fab fa-instagram fa-2x"></i></a>
            <a target="_blank" href="https://www.facebook.com/minizelen.cz/"><i class="fab fa-facebook-square fa-2x"></i></a>
                    
        </div>
    </div>
    <header id="header">
        <nav class="burgermenu" id="hamburger">
            <div class="burger" onclick="hamburger()">
                <div class="hm"></div>
                <div class="hm"></div>
                <div class="hm"></div>
            </div>
            <div id="odkazy">
                <a href="/">DOMŮ</a>
                <a href="#">MINIZELEŇ</a>
                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Products:default")) ?>">PRODUKTY</a>
                <a href="#" class="logo"><img src="../dist/images/minizelen_logo.png"></a>
                <a href="#">OBJEDNÁVKA</a>
                <a href="#">SPOLUPRÁCE</a>
                <a href="#">KONTAKT</a>
            </div>
        </nav>
        <a href="#"><img class="absolute" src="../dist/images/minizelen_logo.png"></a>
    </header>
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
    <div class="patickaKontakt">
        <div class="mb-30 blok">
            <a target="_blank" class="instagram-logo-odkaz" href="https://www.instagram.com/minizelen.cz/">
                <img src="../dist/images/minizelen_logo.png" alt=":)">
                <h1>Minizelen.cz</h1>
            </a>
            <div id="instafeed">
            </div>
            <a target="_blank" href="https://www.instagram.com/minizelen.cz/" class="button"><i class="fab fa-instagram fa-2x"></i><p>Sledujte nás</p></a>
        </div>
        <div class="mb-30 blok">
            <h1>Minizeleň</h1>
            <nav class="patickaNavigace">
                <ul>
                    <li><a href="#">O nás</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Spolupráce</a></li>
                    <li><a href="#">Obchodní podmínky</a></li>
                    <li><a href="#">Ochrana osobních údajů</a></li>
                </ul>
            </nav>
        </div>
        <div class="mb-30 blok hiding">
        </div>
        <div class="mb-30 blok">
            <h1>Kontakt</h1>
            <div class="telefon">
                <i class="fas fa-phone-alt"></i>
                <p>+420 733 593 256</p>
            </div>
            <div class="telefon">
                <i class="fas fa-phone-alt"></i>
                <p>+420 731 514 380</p>
            </div>
            <div class="telefon">
                <i class="fas fa-envelope"></i>
                <a href="mailto: info@minizelen.cz">info@minizelen.cz</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2019 Cifra Marek</p>
    </footer>
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>

</html><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 15');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockScripts($_args)
	{
?>    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
    <script src="../dist/js/scripts.js"></script>
    <script src="../dist/js/instafeed.js"></script>

<?php
	}

}

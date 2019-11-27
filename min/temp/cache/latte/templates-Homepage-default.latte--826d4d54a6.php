<?php
// source: /hosting/www/minizelen.cz/app/Presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template826d4d54a6 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
?><img class="uvodniObrazek" id="odsazeni" src="../dist/images/minizelen_logo.png">
<div class="zbytek">
    <article id="article">
        <div class="mb-30 blok">
            <h1>Novinky</h1>
            <div class="img-wrapper--abs">
                <img src="../dist/images/cesnek.jpeg">
            </div>
            <p>Představujeme Vám další novinku v naší nabídce a tou je Česnek. Velmi výrazná chuť česneku, bohatý na vitamín A, B, C, E a také hořčík, vápník a železo.
            </p>
        </div>
        <div class="mb-30 blok">
            <h1>Kde nás najdete</h1>
            <div class="img-wrapper--abs">
                <img src="../dist/images/LaCasa.jpg">
            </div>
            <p>Minizeleň aktuálně můžete ochutnat u našich obchodních partnerů, například v příjemné kavárně a vinárně LaCasa Vysoké Mýto</p>
        </div>
        <div class="mb-30 blok">
            <h1>Novinky</h1>
            <div class="img-wrapper--abs">
                <img src="../dist/images/treti.jpg">
            </div>
            <p>Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cupiditate doloremque, modi nesciunt perferendis reiciendis. m dolor sit amet, consectetur adipisicing elit. Amet, animi eaque eius fugit ipsam maxime, minus nostrum obcaecati odit optio pariatur perferendis placeat quia, quisquam recusandae saepe sint sunt voluptatum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum iusto quae quia totam veritatis. Accusantium, aliquid consectetur dicta distinctio, error exercitationem facilis incidunt inventore, iure minima odio recusandae sed soluta!
            </p>
        </div>
        <div class="mb-30 blok">
            <h1>Novinky</h1>
            <div class="img-wrapper--abs">
                <img src="../dist/images/minizelen_logo.png">
            </div>
            <p>Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cupiditate doloremque, modi nesciunt perferendis reiciendis. m dolor sit amet, consectetur adipisicing elit. Amet, animi eaque eius fugit ipsam maxime, minus nostrum obcaecati odit optio pariatur perferendis placeat quia, quisquam recusandae saepe sint sunt voluptatum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum iusto quae quia totam veritatis. Accusantium, aliquid consectetur dicta distinctio, error exercitationem facilis incidunt inventore, iure minima odio recusandae sed soluta!
            </p>
        </div>
    </article>
</div><?php
	}

}

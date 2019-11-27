<?php
// source: /hosting/www/minizelen.cz/min/app/Presenters/templates/Products/default.latte

use Latte\Runtime as LR;

class Templatec305b25f60 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['product'])) trigger_error('Variable $product overwritten in foreach on line 5');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="zbytek">
    <div class="filtr" id="filtr"></div>
        <article id="article pt-150">
<?php
		$iterations = 0;
		foreach ($products as $product) {
?>
            <div class="mb-30 blok">
            <h1><?php echo LR\Filters::escapeHtmlText($product->name) /* line 7 */ ?></h1> 
            <div class="img-wrapper">
            <div class="vyskText">
            <p> <?php echo LR\Filters::escapeHtmlText($product->taste) /* line 10 */ ?> </p>
            <p> <?php echo LR\Filters::escapeHtmlText($product->description) /* line 11 */ ?></p>
            </div>
            <img src="../dist/images/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($product->path)) /* line 13 */ ?>">
            </div>
            <p>Cena:  kč</p>
        </div>
<?php
			$iterations++;
		}
?>
</div>
</article>
</div><?php
	}

}

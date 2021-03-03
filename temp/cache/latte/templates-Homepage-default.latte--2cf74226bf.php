<?php

use Latte\Runtime as LR;

/** source: C:\inetpub\wwwroot\SlimShop\AjaxTest\app\Presenters/templates/Homepage/default.latte */
final class Template2cf74226bf extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <h1>Testovací formulář</h1>
    ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $this->global->formsStack[] = $this->global->uiControl["ajaxForm"], ['class' => "ajax"]) /* line 5 */;
		echo '
        ';
		echo end($this->global->formsStack)["name"]->getControl() /* line 6 */;
		echo '
        ';
		echo end($this->global->formsStack)["send"]->getControl() /* line 7 */;
		echo '
    ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		echo '

    <h1>Testovací request (makeRequest)</h1>
    <a href="#" class="click">Test request</a>
';
	}

}

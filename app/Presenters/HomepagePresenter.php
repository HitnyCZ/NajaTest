<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette;
use Nette\Application\UI\Form;

final class HomepagePresenter extends BasePresenter
{
	public function renderDefault(): void
	{
		$this->template->anyVariable = 'any value';
	}

	protected function createComponentAjaxForm(): Form
    {
        $form = new Form();
        $form->addText('name', 'Name');
        $form->addSubmit('send', 'Send');

        $form->onSuccess[] = function (Form $form, Nette\Utils\ArrayHash $values) {
            $this->payload->name = $values->name;
            $this->redrawControl();
        };

        return $form;
    }


    public function handleAjax()
    {
        $this->payload->foo = 'bar';
        $this->redrawControl();
    }
}

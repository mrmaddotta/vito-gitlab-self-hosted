<?php

namespace App\Vito\Plugins\Mrmaddotta\VitoGitlabSelfHosted;

class Plugin extends \App\Plugins\AbstractPlugin
{
    protected string $name = 'Gitlab Self Hosted P24';

    protected string $description = 'An example plugin template for vito plugins';

    public function boot(): void
    {
        \App\Plugins\RegisterSourceControl::make('gitlab-self-hosted')
            ->label('Self Hosted Gitlab')
            ->handler(\App\Vito\Plugins\Afrihost\VitoGitlabSelfHosted\Bonnie::class)
            ->form(
                \App\DTOs\DynamicForm::make([
                    \App\DTOs\DynamicField::make('token')
                        ->text()
                        ->label('Personal Access Token'),
                    \App\DTOs\DynamicField::make('url')
                        ->text()
                        ->label('URL'),
                    \App\DTOs\DynamicField::make('port')
                        ->text()
                        ->label('Port'),
                ])
            )
            ->register();
    }
}

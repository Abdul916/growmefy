<?php

namespace App\Filament\Admin\Resources\OauthLoginProviderResource\Pages;

use App\Filament\Admin\Resources\OauthLoginProviderResource;
use Filament\Resources\Pages\Page;

class BitbucketSettings extends Page
{
    protected static string $resource = OauthLoginProviderResource::class;

    protected static string $view = 'filament.admin.resources.oauth-login-provider-resource.pages.bitbucket-settings';

    public function mount(): void
    {
        static::authorizeResourceAccess();
    }
}
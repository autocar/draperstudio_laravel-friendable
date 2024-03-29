<?php

/*
 * This file is part of Laravel Friendable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Friendable;

use PackageBackup\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'friendable';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishMigrations();
    }
}

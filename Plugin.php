<?php namespace Matchish\Brk;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'brk' => function ($data) {
                    \Log::debug($data);
                    xdebug_break();
                },
            ],
            'filters' => [
                'brk' => function ($data) {
                    \Log::debug($data);
                    xdebug_break();
                },

            ]
        ];
    }
}

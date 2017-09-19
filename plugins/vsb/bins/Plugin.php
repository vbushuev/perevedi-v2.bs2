<?php namespace vsb\bins;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

 use Event;
 use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Bins table',
            'description' => 'Provides features to calculater comission',
            'author'      => 'Vladimir Bushuev',
            'icon'        => 'icon-credit-card'
        ];
    }

    public function registerComponents(){
        return [
            '\vsb\bins\Components\Bincheck' => 'Bincheck'
        ];
    }
    public function registerNavigation(){
        return [
            'bins' => [
                'label'       => 'BINs table',
                'url'         => Backend::url('vsb/bins/table'),
                'icon'        => 'icon-credit-card',
                // 'permissions' => ['acme.blog.*'],
                'order'       => 500,
                // 'sideMenu' => [
                //     'posts' => [
                //         'label'       => 'Posts',
                //         'icon'        => 'icon-copy',
                //         'url'         => Backend::url('acme/blog/posts'),
                //         'permissions' => ['acme.blog.access_posts']
                //     ],
                //     'categories' => [
                //         'label'       => 'Categories',
                //         'icon'        => 'icon-copy',
                //         'url'         => Backend::url('acme/blog/categories'),
                //         'permissions' => ['acme.blog.access_categories']
                //     ]
                // ]
            ]
        ];
    }
}

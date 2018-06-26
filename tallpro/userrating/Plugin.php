<?php namespace Tallpro\UserRating;

use Backend;
use Clake\Userextended\Models\Comment as CommentsModel;
use Tallpro\UserRating\Models\Rating as RatingModel;
use Clake\Userextended\Controllers\Comments as CommentsController;
use System\Classes\PluginBase;

/**
 * UserRating Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = [
        'Clake.UserExtended'
    ];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'UserRating',
            'description' => 'No description provided yet...',
            'author'      => 'Tallpro',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        Module::register();
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

        CommentsController::extendFormFields(function($form, $model, $context){

            $form->addFields([
                'rating' => [
                    'label' => 'Rating',
                    'type'    => 'dropdown',
                    'options' => [
                        '1' => 1,
                        '2' => 2,
                        '3' => 3,
                        '4' => 4,
                        '5' => 5,
                    ],
                ],
            ]);


        });


    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Tallpro\UserRating\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'tallpro.userrating.some_permission' => [
                'tab' => 'UserRating',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'userrating' => [
                'label'       => 'UserRating',
                'url'         => Backend::url('tallpro/userrating/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['tallpro.userrating.*'],
                'order'       => 500,
            ],
        ];
    }
}

<?php namespace Tallpro\UserRating;

use Clake\UserExtended\Traits\StaticFactoryTrait;
use Clake\UserExtended\Classes\UserExtended;

/**
 * Class Module
 * @package Tallpro\UserRating
 *
 * @author Tallpro
 */
class Module extends UserExtended
{
    use StaticFactoryTrait;

    public $name = 'tallproUserRating';

    public $author = 'Tallpro';

    public $description = "";

    public $version = "";

    public function initialize() {}

    /*
     * [Optional] Declare your custom bonds (if you have any) here. Bonds can still be injected without doing this step.
     * const PLUGIN_BOND_STATE_NAME = 111111;
     * The function FriendsManager::bondStateCreator() might prove helpful.
     */

    // Components
    public function injectComponents()
    {
        return [
            // Insert your components here with the format shown below
            'Tallpro\UserRating\Components\User' => 'tpuser',
        ];
    }

    public function injectAssets()
    {
        return [
            // Insert your assets or asset overrides here with the format shown below
            //'GeneralJS'      => '/plugins/clake/userextended/assets/js/general.js',
            //'GeneralStyling' => '/plugins/clake/userextended/assets/css/general.css'
        ];
    }

    /**
     * Injecting Navigation isn't supported in this version of UE.
     * This feature should be supported in a future version of UE
     */
    public function injectNavigation()
    {
        return [];
    }

    /**
     * Injecting Lang isn't supported in this version of UE.
     * This feature should be supported in a future version of UE
     */
    public function injectLang()
    {
        return [];
    }

    public function injectBonds()
    {
        return [];
    }

    /**
     * Returns the plugin documentation for display in the Module Manager
     * @return array
     */
    /*public function getDocumentation()
    {

    }*/

    /**
     * Returns the plugin version notes for display in the Module Manager
     * @return array
     */
    /*public function getUpdateNotes()
    {

    }*/


}
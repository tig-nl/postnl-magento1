<?php
/**
 *                  ___________       __            __
 *                  \__    ___/____ _/  |_ _____   |  |
 *                    |    |  /  _ \\   __\\__  \  |  |
 *                    |    | |  |_| ||  |   / __ \_|  |__
 *                    |____|  \____/ |__|  (____  /|____/
 *                                              \/
 *          ___          __                                   __
 *         |   |  ____ _/  |_   ____ _______   ____    ____ _/  |_
 *         |   | /    \\   __\_/ __ \\_  __ \ /    \ _/ __ \\   __\
 *         |   ||   |  \|  |  \  ___/ |  | \/|   |  \\  ___/ |  |
 *         |___||___|  /|__|   \_____>|__|   |___|  / \_____>|__|
 *                  \/                           \/
 *                  ________
 *                 /  _____/_______   ____   __ __ ______
 *                /   \  ___\_  __ \ /  _ \ |  |  \\____ \
 *                \    \_\  \|  | \/|  |_| ||  |  /|  |_| |
 *                 \______  /|__|    \____/ |____/ |   __/
 *                        \/                       |__|
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
class TIG_PostNL_Model_Core_System_Config_Source_IdCheckPakjegemakProductOptions
    extends TIG_PostNL_Model_Core_System_Config_Source_ProductOptions_Abstract
{
    /**
     * @var array $_options
     */
    protected  $_options = array(
        '3573' => array(
            'value'             => '3573',
            'label'             => 'Post Office + ID Check',
            'isExtraCover'      => false,
            'isEvening'           => true,
            'isSunday'          => true,
            'isPge'             => false,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
            'group'             => 'pakjegemak_options'
        ),
        '3576' => array(
            'value'             => '3576',
            'label'             => 'Post Office + Notification + ID Check',
            'isExtraCover'      => false,
            'isEvening'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isPge'             => true,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
            'group'             => 'pakjegemak_options'
        ),
        '3583' => array(
            'value'             => '3583',
            'label'             => 'Post Office + Extra Cover + ID Check',
            'isExtraCover'      => true,
            'isEvening'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isPge'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
            'group'             => 'pakjegemak_options'
        ),
        '3586' => array(
            'value'             => '3586',
            'label'             => 'Post Office + Extra Cover + Notification + ID Check',
            'isExtraCover'      => true,
            'isEvening'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isPge'             => true,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
            'group'             => 'pakjegemak_options'
        ),
    );

    /**
     * Get available id check options
     *
     * @param bool $flat
     *
     * @return array
     */
    public function getAvailableOptions($flat = false)
    {
        return $this->getOptions(array(), $flat, true);
    }
}

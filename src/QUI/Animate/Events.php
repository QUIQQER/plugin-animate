<?php

/**
 * This file contains \QUI\Animate\Events
 */

namespace QUI\Animate;

use QUI;

/**
 * Class Events
 *
 * @package quiqqer/animate
 */
class Events
{
    /**
     * Event : on template get header
     *
     * @param QUI\Template $Template
     */
    static function onTemplateGetHeader(QUI\Template $Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR . 'quiqqer/animate/bin/animate.min.css');
    }
}

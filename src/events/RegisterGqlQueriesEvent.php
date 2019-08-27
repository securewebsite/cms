<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\events;

use GraphQL\Type\Definition\Type;
use yii\base\Event;

/**
 * RegisterGqlQueryEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.3.0
 */
class RegisterGqlQueriesEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var array[] List of GraphQL query definitions
     */
    public $queries = [];
}

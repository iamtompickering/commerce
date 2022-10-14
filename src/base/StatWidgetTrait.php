<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\commerce\base;

use craft\gql\types\DateTime;

/**
 * Stat Widget Trait
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 4.2.0
 */
trait StatWidgetTrait
{
    /**
     * @var int|DateTime|null
     */
    public mixed $startDate = null;

    /**
     * @var int|DateTime|null
     */
    public mixed $endDate = null;

    /**
     * @var string|null
     */
    public ?string $dateRange = null;

    /**
     * @var array|null
     */
    public ?array $orderStatuses = null;
}

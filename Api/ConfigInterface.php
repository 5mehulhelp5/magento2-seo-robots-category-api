<?php
/**
 * Copyright (c) 2025. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsCategoryApi\Api;

use Magento\Catalog\Model\Category;
use Magento\Store\Model\ScopeInterface;

interface ConfigInterface
{
    public const CATEGORY_ATTRIBUTE_CODE = 'robots_meta_tag';
    public const APPLY_ROBOTS_TO_PRODUCTS_ATTRIBUTE_CODE = 'apply_robots_to_products';
    public const PRODUCT_ROBOTS_ATTRIBUTE_CODE = 'product_robots_meta_tag';
    public const USE_DEFAULT = 0;
    public const USE_CATEGORY_ROBOTS = -1;

    // Use category robots for products toggle
    public const USE_CATEGORY_ROBOTS_FOR_PRODUCTS_ATTRIBUTE_CODE = 'use_category_robots_for_products';

    // X-Robots-Tag HTTP Header attributes
    public const X_ROBOTS_HEADER_ATTRIBUTE_CODE = 'x_robots_header';
    public const USE_META_FOR_X_ROBOTS_ATTRIBUTE_CODE = 'use_meta_for_x_robots';
    public const APPLY_X_ROBOTS_TO_PRODUCTS_ATTRIBUTE_CODE = 'apply_x_robots_to_products';
    public const PRODUCT_X_ROBOTS_HEADER_ATTRIBUTE_CODE = 'product_x_robots_header';
    public const USE_CATEGORY_X_ROBOTS_FOR_PRODUCTS_ATTRIBUTE_CODE = 'use_category_x_robots_for_products';

    /**
     * Check if category robots functionality is enabled
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     * @return bool
     */
    public function isEnabled($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): bool;
}

<?php
/**
 * Copyright (c) 2025. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsCategoryApi\Api;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\Product;

interface GetCategoryRobotsInterface
{
    /**
     * Get robots value for a category
     *
     * @param Category $category
     * @return string|null
     */
    public function execute(Category $category): ?string;

    /**
     * Get robots value for a product based on its categories
     *
     * @param Product $product
     * @return string|null
     */
    public function executeForProduct(Product $product): ?string;

    /**
     * Get X-Robots-Tag directives for a category
     *
     * @param Category $category
     * @return array Directive array or empty array if using meta robots fallback
     */
    public function executeXRobots(Category $category): array;

    /**
     * Get X-Robots-Tag directives for a product based on its categories
     *
     * @param Product $product
     * @return array Directive array or empty array if no category X-Robots applies
     */
    public function executeXRobotsForProduct(Product $product): array;
}

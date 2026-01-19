<?php
/**
 * Copyright (c) 2025. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsCategoryApi\Api;

/**
 * Repository for fetching category robots data
 */
interface CategoryRobotsRepositoryInterface
{
    /**
     * Get product robots data for categories
     *
     * Returns array of category data with robots settings
     * Only returns categories where apply_robots_to_products is enabled
     *
     * @param int[] $categoryIds
     * @param int $storeId
     * @return array<int, array{entity_id: int, product_robots_meta_tag: int|null, robots_meta_tag: int|null}>
     */
    public function getProductRobotsDataByCategoryIds(array $categoryIds, int $storeId): array;

    /**
     * Get X-Robots-Tag header data for product categories
     *
     * Returns array of category data with X-Robots settings
     * Only returns categories where apply_x_robots_to_products is enabled
     *
     * @param int[] $categoryIds
     * @param int $storeId
     * @return array<int, array{
     *     entity_id: int,
     *     x_robots_header: string|null,
     *     use_meta_for_x_robots: int|null,
     *     product_x_robots_header: string|null,
     *     use_category_x_robots_for_products: int|null,
     *     robots_meta_tag: string|null
     * }>
     */
    public function getProductXRobotsDataByCategoryIds(array $categoryIds, int $storeId): array;
}

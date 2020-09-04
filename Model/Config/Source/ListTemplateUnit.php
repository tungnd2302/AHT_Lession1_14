<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AHT\HelloWorld\Model\Config\Source;

/**
 * Options provider for weight units list
 *
 * @api
 * @since 100.0.2
 */
class ListTemplateUnit implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'list', 'label' => __('list')],
            ['value' => 'owlcarousel', 'label' => __('owl carousel')]
        ];
    }
}

<?php 
namespace AHT\HelloWorld\Controller\Index;

use Magento\Catalog\Model\ResourceModel\Product\Collection as CollectionProduct;
use Magento\Framework\App\Action\Context;

class Collect extends \Magento\Framework\App\Action\Action {
    protected $_collectionProduct;
    public function __construct(Context $context,CollectionProduct $collectionProduct){
        $this->_collectionProduct = $collectionProduct;
        parent::__construct($context);
    }

    public function execute() {
        $productCollection = $this->_collectionProduct->addAttributeToSelect([
            'name',
            'price',
            'image',
        ])->addAttributeToFilter('name',array(
            'like' => '%Sport%'
   	    ))
        ->setPageSize(3,1);
        $output = $productCollection->getSelect()->__toString();
        echo $output;
        // $output = '';
        // foreach ($productCollection as $product) {
        //     echo "<pre>";
        //     var_dump($product->debug());
        //     echo "</pre>";
        // }
        // $this->getResponse()->setBody($output);
    }
}
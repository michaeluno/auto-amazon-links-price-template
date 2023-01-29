<?php
namespace AutoAmazonLinks\Templates\Price;

/**
 * Available variables:
 * 
 * @var array $aProducts                the fetched product data
 * @var array $aArguments               the user defined arguments such as image size and count etc.
 * @var \AmazonAutoLinks_Option $oOption the plugin option object
 */
$sClassAttribute  = 'amazon-products-price-container' . ' amazon-unit-' . $aArguments[ 'id' ];
$sClassAttribute .= empty( $aArguments[ '_labels' ] ) ? '' : ' amazon-label-' . implode( ' amazon-label-', $aArguments[ 'labels' ] );
?>

<div class="<?php echo $sClassAttribute; ?>">
<?php foreach( $aProducts as $_aProduct ) : ?>
    <?php $_aProduct = $_aProduct + array( 'formatted_price' => '' ); ?>
    <div class="amazon-product-container">
        <?php echo $_aProduct[ 'formatted_price' ]; ?>
    </div>
<?php endforeach; ?>    
</div>
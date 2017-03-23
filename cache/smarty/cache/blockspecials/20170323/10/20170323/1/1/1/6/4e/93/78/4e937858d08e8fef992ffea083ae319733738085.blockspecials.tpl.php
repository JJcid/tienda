<?php /*%%SmartyHeaderCode:50417370658d399a0a657e6-93713753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e937858d08e8fef992ffea083ae319733738085' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1482157024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50417370658d399a0a657e6-93713753',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d399a0b411a5_60377311',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d399a0b411a5_60377311')) {function content_58d399a0b411a5_60377311($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost/prestashop/es/bajamos-precios" title="Promociones especiales">
            Promociones especiales
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost/prestashop/es/vestidos-verano/7-vestido-estampado-gasa.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost/prestashop/20-small_default/vestido-estampado-gasa.jpg" 
                    alt="" 
                    title="Vestido de gasa estampado" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost/prestashop/es/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado">
                            Vestido de gasa estampado
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Vestido sin mangas hasta la rodilla,...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,85 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    24,81 €                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost/prestashop/es/bajamos-precios" 
            title="Todas los promociones especiales">
                <span>Todas los promociones especiales<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>

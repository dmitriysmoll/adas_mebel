# <?php if (!defined('LC_DS')) { die(); } ?>

XC\Upselling:
  tables: [upselling_products]
  columns: {  }
XC\Reviews:
  tables: [reviews]
  columns: {  }
CDev\Coupons:
  tables: [order_coupons, coupons, product_class_coupons, membership_coupons]
  columns: {  }
CDev\Wholesale:
  tables: [wholesale_prices, product_min_quantities]
  columns: {  }
CDev\SocialLogin:
  tables: {  }
  columns: { profiles: { socialLoginProvider: 'socialLoginProvider VARCHAR(128) DEFAULT NULL', socialLoginId: 'socialLoginId VARCHAR(128) DEFAULT NULL' } }
CDev\VolumeDiscounts:
  tables: [volume_discounts]
  columns: {  }
CDev\InstantSearch:
  tables: {  }
  columns: {  }
CDev\ProductAdvisor:
  tables: [product_stats]
  columns: {  }
CDev\UserPermissions:
  tables: {  }
  columns: { roles: { enabled: 'enabled TINYINT(1) UNSIGNED NOT NULL' }, permissions: { enabled: 'enabled TINYINT(1) UNSIGNED NOT NULL' } }
CDev\Sale:
  tables: {  }
  columns: { products: { participateSale: 'participateSale TINYINT(1) UNSIGNED NOT NULL', discountType: 'discountType VARCHAR(32) NOT NULL', salePriceValue: 'salePriceValue NUMERIC(14, 4) NOT NULL' } }

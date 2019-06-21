# OdooClientBundle

A Symfony Client for Odoo using Ripcord RPC library (as used in Odoo Web API docs)


## Installation

* Enable the XML-RPC in your PHP installation.

* Download OdooClientBundle using [composer]()

```composer
composer require sofia-holding/odoo-client
```
* Enable the Bundle
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
            new \Odoo\ClientBundle\OdooClientBundle(),
        // ...
    );
}
```

* Add the following configuration to your parameters.yml
```yml
# app/config/parameters.yml.dist


    url_odoo:  'example.odoo.com'
    db_odoo: 'example-database'
    username_odoo: 'user@email.com'
    password_odoo: 'yourpassword'
```


## Usage

```php
# Create an instance of the odoo service
$odooService = $this->get('odoo_service');

# Read records        
$option[0] = array('id', '=', $id);
$odooService->search('purchase.order', $option);

# Create records
$purchase_order = array(
            'company_id' => 1,
            'currency_id' => 1,
            'partner_id' => 1,
            'date_order' => "2019-06-14 00:00:00"

        );

$odooService->create('purchase.order', $purchase_order);

# update records        
$option[0] = array('date_order'=>"2019-07-28 12:00:00");
$odooService->update('purchase.order',$id,$option);

# delete records        
$odooService->delete('purchase.order',$id);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.



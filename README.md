RemoveCustomerAccountLinks
==========================

Removes customer account links in Magento.

Facts
-----
- version: 1.1.0.0
- extension key: IntegerNet_RemoveCustomerAccountLinks
- [extension on GitHub](https://github.com/integer-net/RemoveCustomerAccountLinks)

Description
-----------
Removes customer account links in Magento.
With this easy to install extension, you can switch off the default menu points in frontend user account easily by click n go in magento backend.
The module distinguishes between magento ce version 1.5, 1.6, 1.7 and 1.8.

Requirements
------------
- PHP >= 5.2.0
- PHP <= 7.9.9

Compatibility
-------------
- Magento >= 1.5

Installation Instructions
-------------------------
1. Install the extension by copying all the files into your Magento document root.
2. Clear the cache, logout from the admin panel and then login again.
3. Configure the extension under System -> Configuration -> (Customers)Remove Customer Account Links
4. Choose menu points, which should NOT be shown

Uninstallation
--------------
1. Remove all extension files from your Magento installation
  - app/code/community/IntegerNet/RemoveCustomerAccountLinks
  - app/etc/modules/IntegerNet_RemoveCustomerAccountLinks.xml
  - app/locale/de_DE/IntegerNet_RemoveCustomerAccountLinks.csv
  - app/locale/en_US/IntegerNet_RemoveCustomerAccountLinks.csv

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/integer-net/RemoveCustomerAccountLinks/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Christian Philipp<br />
Viktor Franz

WWW: [http://www.integer-net.de/](http://www.integer-net.de/)<br />
Twitter [@integer_net](https://twitter.com/integer_net)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2013 integer_net GmbH

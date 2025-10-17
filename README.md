# Demo Labs: Supply Chain Attack in PHP

Đây là nội dung khoá học nội bộ do tôi triển khai tại công ty. Các đoạn mã trong đây là các đoạn mã dính nhiều lỗ hổng
nhằm mục đích demo, vui không sử dụng trong công việc thực tế

This is the content of the internal course that I implemented at the company. The codes in here are code with many
vulnerabilities for demo purposes, please do not use in real work.

Use

```shell
composer require nguyenanhung/demo-labs-supplychain-attack-in-php
```
```php
<?php
require_once 'vendor/autoload.php';

use nguyenanhung\DemoLabs\SupplyChainAttack\ThisIsDemo;

$lab = new ThisIsDemo();

$data = $lab->normalFeature();

echo "<pre>";
print_r($data);
echo "</pre>";
```

## Contact & Support

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
|-------------|----------------------|------------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Vietnam with Love <3

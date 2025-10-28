<?php
if(!session_id()){ session_start();}
require_once '../app/init.php'; //file init ini yahng akan memanggil file yang kita butuhkan, teknik ini dinamakan bootstrapung (panggil satu file, dan file tsb akan memanggil seluruh aplikasi MVC)

$app = new App; //memanggil kelas App 
<?php

require "../src/TariffInterface.php";
require "../src/ServiceInterface.php";
require "../src/TariffAbstract.php";
require "../src/TariffBasic.php";
require "../src/ServiceGPS.php";
require "../src/ServiceDriver.php";
require "../src/TariffHour.php";
require "../src/TariffStudent.php";

echo "<BR>";

$tariff = new TariffBasic(5, 60);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice() . "<BR>";

$tariffH = new TariffHour(5, 65);
$tariffH->addService(new ServiceDriver(100));
echo $tariffH->countPrice() . "<BR>";

$tariffS = new TariffStudent(5, 60);
$tariffS->addService(new ServiceDriver(100));
echo $tariffS->countPrice() . "<BR>";
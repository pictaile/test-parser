<?php

namespace Commands;

class Help {

    public static function printInfo() {
        echo "<p>parse -запускает парсер, принимает обязательный параметр url (как с протоколом, так и без).</p>" ;
        echo "<p>report - выводит в консоль результаты анализа для домена, принимает обязательный параметр domain (как с протоколом, так и без).</p>" ;
    }
}
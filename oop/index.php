<?php

require_once "IBaseLogger.php";
require_once "UpdateData.php";

class Profile implements IBaseLogger
{
    use UpdateData;

    public function putLog(string $data): void
    { // Методы логов не должны быть в классе Пользователя (Profile)
        file_put_contents('log.txt', $data);
    }

    public function getLog(): string
    {
        return file_get_contents('log.txt');
    }

    public function getAgeFromData(): array
    {
        $datas = $this->getData();

        $ages = [];
        foreach ($datas as $data) {
            foreach ($data as $key => $item) {
                if ($key === "age") {
                    $ages[] = $item;
                } else {
                    $logString = "Неизвестный параметр " . $key;
                    $this->putLog($logString);
                }
            }
        }

        return $ages;
    }
}


$profile = new Profile();
$ages = $profile->getAgeFromData();

foreach ($ages as $age) {
    echo $age . "\n";
}

echo $profile->getLog();





<?php

namespace Bank;

use App\DB\DataBase;

class Json implements DataBase
{

    private $data;
    private static $obj;

    public static function getJson()
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct()
    {
        if (!file_exists(__DIR__ . '../json/data.json')) {
            file_put_contents(__DIR__ . '../json/data.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(__DIR__ . '../json/data.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR . '../json/data.json', json_encode($this->data));
    }

    public function create(array $userData): void
    {
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData): void
    {
        foreach ($this->data as $index => $user) {
            if ($user['id'] == $userId) {
                $this->data[$index] = $userData;
                return;
            }
        }
    }

    public function delete(int $userId): void
    {
        foreach ($this->data as $index => $user) {
            if ($user['id'] == $userId) {
                unset($this->data[$index]);
                return;
            }
        }
    }

    public function show(int $userId): array
    {
        foreach ($this->data as $index => $user) {
            if ($user['id'] == $userId) {
                return $this->data[$index];
            }
        }
    }

    public function showAll(): array
    {
        return $this->data;
    }

    public function getCount(int $amount): bool
    {
        $counter = []; // veikia kaip Set'as
        $counter[$amount] = null;
        foreach ($this->data as $user) {
            $counter[$user['amount']] = null;
        }
        return count($counter) !== count($this->data) ? true : false;
    }
}

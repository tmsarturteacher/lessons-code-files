<?php

trait UpdateData
{
    private array $data = [
        [
            "name" => "",
            "age" => "12"
        ],
        [
            "name" => "",
            "age" => "30"
        ],
        [
            "name" => "",
            "age" => "50"
        ]
    ];

    public function getData(): array
    {
        return $this->data;
    }
}
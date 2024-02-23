<?php

interface IBaseLogger
{
    public function putLog(string $data): void;
    public function getLog(): string;
}
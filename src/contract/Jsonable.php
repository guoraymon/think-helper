<?php

namespace think\contract;

interface Jsonable
{
    public function toJson($options = JSON_UNESCAPED_UNICODE);
}
<?php

namespace Invoke\Typesystem;

use InvalidArgumentException;

class Typesystem
{
    const Int = "integer";
    const Float = "float";
    const Bool = "boolean";
    const String = "string";
    const Array = "array";

    public bool $strict = false;

    public function validateType(
        string $paramName,
        $paramType,
        $value
    )
    {
        // todo: ...
    }

    public static function toValidType(string $type): string
    {
        switch ($type) {
            case "int":
            case "integer":
                return Typesystem::Int;

            case "float":
            case "double":
                return Typesystem::Float;

            case "bool":
            case "boolean":
                return Typesystem::Bool;

            case "string":
                return Typesystem::String;

            case "array":
                return Typesystem::Array;
        }

        throw new InvalidArgumentException("Invalid type passed: $type");
    }
}

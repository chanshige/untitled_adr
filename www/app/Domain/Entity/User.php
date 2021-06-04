<?php

namespace App\Domain\Entity;

use JMS\Serializer\Annotation as Serializer;

class User
{
    /**
     * @Serializer\Type("int")
     * @Serializer\SerializedName("user_id")
     */
    private int $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("user_name")
     */
    private ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

<?php

namespace App\Http\Responder\User;

use Illuminate\Http\JsonResponse;
use JMS\Serializer\ArrayTransformerInterface;

class IndexResponder
{
    public function __construct(
        private ArrayTransformerInterface $transformer
    ) {}

    public function emit(array $attribute): JsonResponse
    {
        $data = [];
        foreach ($attribute as $entity) {
            $data[] = $this->transformer->toArray($entity);
        }

        return new JsonResponse($data);
    }
}

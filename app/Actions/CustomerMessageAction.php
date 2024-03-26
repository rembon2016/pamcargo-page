<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\CustomerMessage;

class CustomerMessageAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createCustomerMessage(array $dto): array|object
    {
        $customerMessage = CustomerMessage::create([
            'firstname' => $dto['firstname'],
            'lastname' => $dto['lastname'],
            'email' => $dto['email'],
            'phone' => $dto['phone'],
            'message' => $dto['message'],
        ]);

        return Utilities::arrayObjectResponse($customerMessage->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function readMessageById(array $dto): array|object
    {
        $customerMessage = CustomerMessage::find($dto['customer_message_id']);
        $readMessage = tap($customerMessage)->update([
            'is_read' => true,
        ]);

        return Utilities::arrayObjectResponse($readMessage->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteCustomerMessage(array $dto): array|object
    {
        $customerMessage = CustomerMessage::where('id', $dto['customer_message_id'])->first();
        $deletedCustomerMessage = tap($customerMessage)->delete();

        return Utilities::arrayObjectResponse($deletedCustomerMessage->toArray());
    }
}

<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Agent;

class AgentAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createAgent(array $dto): array|object
    {
        $agent = Agent::create([
            'title' => $dto['title'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($agent->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateAgent(array $dto): array|object
    {
        $agent = Agent::find($dto['agent_id']);
        $updatedAgent = tap($agent)->update([
            'title' => $dto['title'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedAgent->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteAgent(array $dto): array|object
    {
        $agent = Agent::find($dto['agent_id']);
        $deletedAgent = tap($agent)->delete();

        return Utilities::arrayObjectResponse($deletedAgent->toArray());
    }
}

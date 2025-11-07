<?php

namespace App\Filament\Resources\Proposals\Pages;

use App\Filament\Resources\Proposals\ProposalResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProposal extends CreateRecord
{
    protected static string $resource = ProposalResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}

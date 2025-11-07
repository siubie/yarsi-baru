<?php

namespace App\Filament\Resources\Proposals\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProposalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                FileUpload::make('presentation_file')
                    ->acceptedFileTypes(['application/pdf', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'])
                    ->mimeTypeMap([
                        'pdf' => 'application/pdf',
                        'ppt' => 'application/vnd.ms-powerpoint',
                        'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                    ]),

                FileUpload::make('document_file')
                    ->acceptedFileTypes(['application/pdf'])
                    ->mimeTypeMap([
                        'pdf' => 'application/pdf',
                    ]),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'submitted' => 'Submitted',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->default('draft')
                    ->required(),
                Hidden::make('user_id')
                    ->default(auth()->id()),
            ]);
    }
}

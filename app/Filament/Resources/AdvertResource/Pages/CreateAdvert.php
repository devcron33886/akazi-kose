<?php

namespace App\Filament\Resources\AdvertResource\Pages;

use App\Filament\Resources\AdvertResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateAdvert extends CreateRecord
{
    use HasWizard;

    protected static string $resource = AdvertResource::class;

    public function form(Form $form): Form
    {
        return parent::form($form)->schema([
            Wizard::make($this->getSteps())
                ->startOnStep($this->getStartStep())
                ->cancelAction($this->getCancelFormAction())
                ->submitAction($this->getSubmitFormAction())
                ->skippable($this->hasSkippableSteps())
                ->contained(false),
        ])->columns(null);
    }

    protected function getSteps(): array
    {
        return [
            Step::make('Advert')
                ->schema([
                    Section::make()->schema(AdvertResource::getAdvertForm())->columns(),
                ]),

            Step::make('Advert Details')
                ->schema([
                    Section::make()->schema(AdvertResource::getAdvertDetailsForm())->columns(),
                ]),
        ];
    }
}

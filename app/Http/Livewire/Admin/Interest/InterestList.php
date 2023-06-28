<?php

namespace App\Http\Livewire\Admin\Interest;

use Livewire\Component;
use App\Models\User;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use App\Models\Interest;
use Filament\Tables\Columns\BadgeColumn;

class InterestList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Interest::query();
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')->size('sm')
                ->label('Edit')->icon('heroicon-o-pencil-alt')->color('success')->modalHeading('Edit Interest')->action(function ($record, $data) {
                    $record->update($data);
            })->form(
                function($record){
                    return [
                        Fieldset::make('Interest Information')
                    ->schema([
                        TextInput::make('name')->required()->default($record->type),
                        TextInput::make('percentage')->numeric()->required()->default($record->percentage),
                    ])
                    ->columns(1),
                    ];
                }
            )->modalWidth('xl'),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('user')->label('New Interest')->button()->icon('heroicon-o-plus')->size('sm')->color('gray')->action(function ($record, $data) {
              Interest::create([
                'type' => $data['type'],
                'percentage' => $data['percentage'],
              ]);
            })->form([

                Fieldset::make('Interest Information')
                    ->schema([
                        TextInput::make('type')->required(),
                        TextInput::make('percentage')->numeric()->required(),
                    ])

                    ->columns(2),
            ])->modalWidth('2xl'),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('type')->label('TYPE')->sortable()->searchable(),
            TextColumn::make('percentage')->label('PERCENTAGE')->formatStateUsing(
                function($record){
                    return $record->percentage.'%';
                }
            )->sortable()->searchable(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.interest.interest-list');
    }
}

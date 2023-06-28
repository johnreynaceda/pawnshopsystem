<?php

namespace App\Http\Livewire\Admin\Branch;

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
use App\Models\Role;
use App\Models\Branch;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\Textarea;

class BranchList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Branch::query();
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('user')->label('New Branch')->button()->icon('heroicon-o-plus')->size('sm')->color('gray')->action(function ($record, $data) {
                Branch::create([
                    'name' => $data['name'],
                    'address' => $data['address'],
                    'tin' => $data['tin'],
                    'description' => $data['description'],
                ]);
            })->form([

                Fieldset::make('Branch Information')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('address')->required(),
                        TextInput::make('tin')->required(),
                        Textarea::make('description')->required(),
                    ])

                    ->columns(2),
            ])->modalWidth('2xl'),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('BRANCH NAME')->sortable()->searchable(),

            TextColumn::make('address')->label('ADDRESS')->sortable()->searchable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')->size('sm')
                ->label('Edit')->icon('heroicon-o-pencil-alt')->color('success')->modalHeading('Edit Branch')->action(function ($record, $data) {
                    $record->update($data);
            })->form(
                function($record){
                    return [
                        Fieldset::make('Branch Information')
                    ->schema([
                        TextInput::make('name')->required()->default($record->name),
                        TextInput::make('address')->required()->default($record->address),
                        TextInput::make('tin')->required()->default($record->tin),
                        Textarea::make('description')->required()->default($record->description),
                    ])
                    ->columns(2),
                    ];
                }
            ),
        ];
    }

    public function render()
    {
        return view('livewire.admin.branch.branch-list');
    }
}

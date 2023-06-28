<?php

namespace App\Http\Livewire\Admin\Category;

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
use App\Models\Category;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;

class CategoryList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Category::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('NAME')->sortable()->searchable(),
             TextColumn::make('number_of_maturity')->label('NO. OF MATURITY')->sortable()->searchable(),
             TextColumn::make('number_of_month')->label('NO. OF MONTH')->sortable()->searchable(),
             ToggleColumn::make('is_renewable')->label('RENEWABLE')->sortable()->onColor('success')->offColor('danger'),

        ];
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('user')->label('New Category')->button()->icon('heroicon-o-plus')->size('sm')->color('gray')->action(function ($record, $data) {
                Category::create([
                    'name' => $data['name'],
                    'number_of_maturity' => $data['number_of_maturity'],
                    'number_of_month' => $data['number_of_month'],
                    'is_renewable' => $data['is_renewable'],
                ]);
            })->form([

                Fieldset::make('Category Information')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('number_of_maturity')->required(),
                        TextInput::make('number_of_month')->required(),
                        Toggle::make('is_renewable')->inline()->onColor('success')->offColor('danger')
                    ])
                    ->columns(2),
            ])->modalWidth('2xl'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')->size('sm')
                ->label('Edit')->icon('heroicon-o-pencil-alt')->color('success')->modalHeading('Edit Category')->action(function ($record, $data) {
                    $record->update($data);
            })->form(
                function($record){
                    return [
                        Fieldset::make('Category Information')
                        ->schema([
                            TextInput::make('name')->default($record->name)->required(),
                            TextInput::make('number_of_maturity')->label('Number of Maturity')->default($record->number_of_maturity)->required(),
                            TextInput::make('number_of_month')->label('Number of Month')->default($record->number_of_month)->required(),
                            Toggle::make('is_renewable')->inline()->onColor('success')->offColor('danger')-> default($record->is_renewable)
                        ])
                        ->columns(2),
                    ];
                }
            )->modalWidth('2xl'),
            Tables\Actions\DeleteAction::make(),
        ];
    }

    public function render()
    {
        return view('livewire.admin.category.category-list');
    }
}

<?php

namespace App\Http\Livewire\Admin\Role;

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

class RoleList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Role::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('NAME')->sortable()->searchable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')->size('sm')
                ->label('Edit')->icon('heroicon-o-pencil-alt')->color('success')->modalHeading('Edit Role')->action(function ($record, $data) {
                    $record->update($data);
            })->form(
                function($record){
                    return [
                        Fieldset::make('Role Information')
                    ->schema([
                        TextInput::make('name')->required()->default($record->name),
                    ])
                    ->columns(1),
                    ];
                }
            )->modalWidth('xl'),
        ];
    }

    public function render()
    {
        return view('livewire.admin.role.role-list');
    }
}

<?php

namespace App\Http\Livewire\Admin\User;


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

class UserList extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
 

    protected function getTableQuery(): Builder
    {
        return User::query()->where('branch_id', auth()->user()->branch_id);
    }

    protected function getTableHeaderActions()
    {
        return [
            Action::make('user')->label('New
            User')->button()->icon('heroicon-o-plus')->size('sm')->color('gray')->action(function ($record, $data) {
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'role_id' => $data['role_id'],
                    'branch_id' => $data['branch_id'],
                ]);
            })->form([

                Fieldset::make('Users Information')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('email')->email()->required(),
                        TextInput::make('password')->password()->required(),
                        Select::make('role_id')->label('Role')
                            ->options(Role::pluck('name', 'id')),
                        Select::make('branch_id')->label('Branch')
                            ->options(Branch::pluck('name', 'id')),

                    ])

                    ->columns(2),
            ])->modalWidth('2xl'),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('NAME')->sortable()->searchable(),
            TextColumn::make('email')->label('EMAIL')->sortable()->searchable(),
            BadgeColumn::make('role_id')->label('ROLE')->enum([
                1 => 'Administrator',
                2 => 'Branch Manager',
                3 => 'Teller',
            ])
                ->colors([
                    'secondary' => 1,
                    'warning' => 2,
                    'success' => 3,
                ])->icons([
                'heroicon-o-user-circle' => 1,
                'heroicon-o-office-building' => 2,
                'heroicon-o-user' => 3,
            ]),
            TextColumn::make('branch.name')->words(3)->label('BRANCH')->sortable()->searchable(),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')->size('sm')
                ->label('Edit')->icon('heroicon-o-pencil')->color('success')->modalHeading('Edit Teacher')->action(function ($record, $data) {
                    $record->update([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => bcrypt($data['password']),
                        'role_id' => $data['role_id'],
                        'branch_id' => $data['branch_id'],
                    ]);
            })->form(
                function($record){
                    return [
                        Fieldset::make('Users Information')
                    ->schema([
                        TextInput::make('name')->required()->default($record->name),
                        TextInput::make('email')->email()->required()->default($record->email),
                        TextInput::make('password')->password()->required(),
                        Select::make('role_id')->label('Role')->default($record->role_id)
                            ->options(Role::pluck('name', 'id')),
                        Select::make('branch_id')->label('Branch')->default($record->branch_id)
                            ->options(Branch::pluck('name', 'id')),

                    ])

                    ->columns(2),
                    ];
                }
            ),
        ];
    }

    public function render()
    {
        return view('livewire.admin.user.user-list');
    }
}

<?php

namespace Wzrd\FilamentLoginLogs\Resources\LoginLogResource;

use Wzrd\FilamentLoginLogs\Models\LoginLog;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LoginLogResource extends Resource
{
    protected static ?string $model = LoginLog::class;

    protected static ?string $navigationIcon = 'filetype-s-log';

    public static function getNavigationGroup(): ?string
    {
        return __('filament-login-logs::translations.group');
    }

    public static function getLabel(): ?string
    {
        return __('filament-login-logs::translations.auth_log');
    }

    public static function getPluralLabel(): ?string
    {
        return __('filament-login-logs::translations.auth_logs');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-login-logs::translations.auth_log');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('loggedBy.name')
                    ->sortable()
                    ->searchable()
                    ->label(__('filament-login-logs::translations.user_name')),
                Tables\Columns\TextColumn::make('ip')
                    ->sortable()
                    ->searchable()
                    ->label(__('filament-login-logs::translations.ip')),
                Tables\Columns\TextColumn::make('user_agent')
                    ->label(__('filament-login-logs::translations.user_agent'))
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    }),
                Tables\Columns\TextColumn::make('login_at')
                    ->sortable()
                    ->searchable()
                    ->label(__('filament-login-logs::translations.login_at')),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('loggedBy')
                    ->relationship('loggedBy', 'name')
                    ->searchable()
                    ->label(__('filament-login-logs::translations.users')),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoginLog::route('/'),
        ];
    }
}

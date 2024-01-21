<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrizeWheelSettingResource\Pages;
use App\Filament\Resources\PrizeWheelSettingResource\RelationManagers;
use App\Models\PrizeWheelSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrizeWheelSettingResource extends Resource
{
    protected static ?string $model = PrizeWheelSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Cài đặt vòng quay';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin cài đặt')
                    ->schema([
                        Forms\Components\TextInput::make('facebook_access_token')->required(),
                        Forms\Components\TextInput::make('facebook_page_id')->required(),
                        Forms\Components\Checkbox::make('auto_messenger')->required()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('facebook_access_token')
                    ->label('Facebook Access Token')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facebook_page_id')
                    ->label('Facebook Page ID')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('auto_messenger')
                    ->label('Tuỳ chọn tự động gửi tin nhắn')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrizeWheelSettings::route('/'),
            'create' => Pages\CreatePrizeWheelSetting::route('/create'),
            'edit' => Pages\EditPrizeWheelSetting::route('/{record}/edit'),
        ];
    }
}

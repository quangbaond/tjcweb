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
                        Forms\Components\FileUpload::make('facebook_state')
                            ->label('Facebook State file')
                            ->required(),
                        Forms\Components\Checkbox::make('auto_messenger')
                            ->label('Tự động gửi tin nhắn')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('facebook_state')
                    ->label('Facebook Access Token')
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

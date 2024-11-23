<?php

namespace App\Filament\Pages;

use App\Models\Homepage;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $navigationGroup = 'Web Settings';

    protected static ?int $navigationSort = 1;

    public function mount(): void 
    {
        $this->form->fill(Homepage::first()->attributesToArray());
    }
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('hero_image'),
                RichEditor::make('about'),
                FileUpload::make('about_img_1'),
                FileUpload::make('about_img_2'),
                FileUpload::make('about_img_3'),
                FileUpload::make('about_img_4'),
                TextInput::make('judul'),
                TextInput::make('eksempler'),
                TextInput::make('alamat'),
                TextInput::make('email'),
                TextInput::make('telepon'),
                TextInput::make('jam_buka'),
            ])
            ->statePath('data');
    } 

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
 
            Homepage::first()->update($data);
        } catch (Halt $exception) {
            return;
        }
        
        Notification::make() 
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send(); 
    }
}

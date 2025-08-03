<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use App\Models\HomePageSetting;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;

class ManageHomePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.manage-home-page';
    protected static ?string $navigationLabel = 'Pengaturan Halaman Home';
    protected static ?string $title = 'Pengaturan Halaman Home';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = HomePageSetting::first();
        if ($settings) {
            $this->form->fill($settings->toArray());
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Header Utama')
                    ->description('Bagian paling atas dari halaman home.')
                    ->schema([
                        TextInput::make('title')->label('Judul Utama')->required(),
                        Textarea::make('subtitle')->label('Sub Judul / Slogan')->required(),
                    ]),

                Section::make('Tentang & Keunggulan')
                    ->schema([
                        Grid::make(2)->schema([
                            RichEditor::make('sejarah')->required(),
                            FileUpload::make('gambar_sejarah')
                                ->image()->disk('public')->imageEditor()
                                ->helperText('Ukuran rekomendasi: 505x755 pixel')
                                ->required(),
                        ]),
                        TextInput::make('motto')->required(),
                        // Menggunakan Repeater yang lebih stabil daripada TagsInput
                        Repeater::make('isi_keunggulan')
                            ->label('Poin-Poin Keunggulan')
                            ->simple( // <--- PERBAIKAN DI SINI
                                TextInput::make('point')->label('Poin')->required()
                            )
                            ->required(),
                        FileUpload::make('gambar_keunggulan')
                            ->image()->disk('public')->imageEditor()
                            ->helperText('Ukuran rekomendasi: 527x465 pixel')
                            ->required(),
                    ]),
                
                Section::make('Varian Produk')
                    ->description('Tampilkan beberapa varian utama di halaman home.')
                    ->schema([
                        Repeater::make('varian')
                            ->schema([
                                FileUpload::make('gambar_varian')->image()->disk('public')->required()->helperText('Ukuran: 228x228 pixel'),
                                TextInput::make('jenis_varian')->required(),
                                Textarea::make('deskripsi_varian')->required(),
                            ])
                            ->columns(3)->grid(2),
                    ]),

                Section::make('Gallery')
                    ->schema([
                        FileUpload::make('gallery_potrait')->multiple()->disk('public')->image()->reorderable()->required()->helperText('Ukuran: 360x432 pixel'),
                        FileUpload::make('gallery_landscape')->multiple()->disk('public')->image()->reorderable()->required()->helperText('Ukuran: 1128x531 pixel'),
                    ]),

                Section::make('Kontak & Media Sosial')
                    ->schema([
                        TextInput::make('username_ig')->label('Username Instagram')->prefix('@')->required(),
                        TextInput::make('nomor_wa')->label('Nomor WhatsApp')->tel()->required(),
                        TextInput::make('gmail')->label('Alamat Email')->email()->required(),
                        Textarea::make('link_maps')->label('Link Embed Google Maps')->rows(6)->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            HomePageSetting::first()->update($data);
            Notification::make()->title('Berhasil Disimpan')->success()->send();
        } catch (\Exception $e) {
            Notification::make()->title('Gagal Menyimpan')->body($e->getMessage())->danger()->send();
        }
    }
}

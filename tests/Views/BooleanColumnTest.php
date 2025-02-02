<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Views;

use Rappasoft\LaravelLivewireTables\Exceptions\DataTableConfigurationException;
use Rappasoft\LaravelLivewireTables\Tests\Models\Pet;
use Rappasoft\LaravelLivewireTables\Tests\TestCase;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class BooleanColumnTest extends TestCase
{
    /** @test */
    public function boolean_column_can_not_be_a_label(): void
    {
        $this->expectException(DataTableConfigurationException::class);

        BooleanColumn::make('Name')->label(fn () => 'My Label')->getContents(Pet::find(1));
    }
}

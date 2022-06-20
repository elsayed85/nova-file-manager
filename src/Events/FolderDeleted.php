<?php

declare(strict_types=1);

namespace BBSLab\NovaFileManager\Events;

use Illuminate\Foundation\Events\Dispatchable;

class FolderDeleted
{
    use Dispatchable;

    public function __construct(public string $disk, public string $path)
    {
    }
}

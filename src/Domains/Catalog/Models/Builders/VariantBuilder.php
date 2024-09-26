<?php

namespace Domains\Catalog\Models\Builders;

use Domains\Shared\Models\Builders\Shared\HasActiveScope;
use Illuminate\Database\Eloquent\Builder;

class VariantBuilder extends Builder
{
    use HasActiveScope;

    public function physical()
    {
        return $this->where('shippable', true);
    }

    public function digital()
    {
        return $this->where('shippable', false);
    }

    public function downloadable()
    {
        return $this->digital();
    }
}

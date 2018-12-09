<?php

declare(strict_types=1);

namespace Elewant\Webapp\DomainModel\Contributor;

final class EmptyContributorList implements ContributorList
{
    public function allContributors(): array
    {
        return [];
    }
}

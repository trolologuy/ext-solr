<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace ApacheSolrForTypo3\Solr\Tests\Unit\Domain\Search\Query\ParameterBuilder;

use ApacheSolrForTypo3\Solr\Domain\Search\Query\ParameterBuilder\BigramPhraseFields;
use ApacheSolrForTypo3\Solr\Tests\Unit\SetUpUnitTestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * @author Timo Hund <timo.hund@dkd.de>
 */
class BigramPhraseFieldsTest extends SetUpUnitTestCase
{
    #[Test]
    public function buildFromEmptyStringCreatesEmptyArrayOnBuild(): void
    {
        $bigramPhraseFields = BigramPhraseFields::fromString('');
        self::assertSame('', $bigramPhraseFields->toString());
    }
}

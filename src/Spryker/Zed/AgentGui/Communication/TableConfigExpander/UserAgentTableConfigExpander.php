<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AgentGui\Communication\TableConfigExpander;

use Orm\Zed\User\Persistence\Map\SpyUserTableMap;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class UserAgentTableConfigExpander implements UserAgentTableConfigExpanderInterface
{
    public function expandConfig(TableConfiguration $config): TableConfiguration
    {
        $this->addAgentHeader($config);
        $this->setRawAgentColumn($config);

        return $config;
    }

    protected function addAgentHeader(TableConfiguration $config): void
    {
        $header = $this->insertAfterHeader($config->getHeader(), SpyUserTableMap::COL_STATUS, [
            SpyUserTableMap::COL_IS_AGENT => 'Agent Customer',
        ]);

        $config->setHeader($header);
    }

    protected function setRawAgentColumn(TableConfiguration $config): void
    {
        $config->setRawColumns(array_merge($config->getRawColumns(), [
            SpyUserTableMap::COL_IS_AGENT,
        ]));
    }

    protected function insertAfterHeader(array $array, string $key, array $new): array
    {
        $keys = array_keys($array);
        $index = array_search($key, $keys);
        $pos = $index === false ? count($array) : $index + 1;

        return array_merge(array_slice($array, 0, $pos), $new, array_slice($array, $pos));
    }
}

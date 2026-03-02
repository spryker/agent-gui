<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AgentGui\Communication\TableConfigExpander;

use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

interface UserAgentTableConfigExpanderInterface
{
    public function expandConfig(TableConfiguration $config): TableConfiguration;
}

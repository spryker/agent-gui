<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AgentGui\Communication;

use Spryker\Zed\AgentGui\Communication\FormExpander\UserAgentFormExpander;
use Spryker\Zed\AgentGui\Communication\FormExpander\UserAgentFormExpanderInterface;
use Spryker\Zed\AgentGui\Communication\TableConfigExpander\UserAgentTableConfigExpander;
use Spryker\Zed\AgentGui\Communication\TableConfigExpander\UserAgentTableConfigExpanderInterface;
use Spryker\Zed\AgentGui\Communication\TableDataExpander\UserAgentTableDataExpander;
use Spryker\Zed\AgentGui\Communication\TableDataExpander\UserAgentTableDataExpanderInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class AgentGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createUserAgentFormExpander(): UserAgentFormExpanderInterface
    {
        return new UserAgentFormExpander();
    }

    public function createUserAgentTableConfigExpander(): UserAgentTableConfigExpanderInterface
    {
        return new UserAgentTableConfigExpander();
    }

    public function createUserAgentTableDataExpander(): UserAgentTableDataExpanderInterface
    {
        return new UserAgentTableDataExpander();
    }
}

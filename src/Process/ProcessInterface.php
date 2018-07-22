<?php

namespace Joydip\Laravel5_database_utilities\Process;

interface ProcessInterface
{
    /**
     * Executes the given command.
     *
     * @param  string $command
     *
     * @return void
     */
    public function process($command);
    
    /**
     * Returns errors which happened during the command execution.
     *
     * @return string|null
     */
    public function getErrors();
}
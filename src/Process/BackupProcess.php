<?php

namespace Joydip\Laravel5_database_utilities\Process;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupProcess //implements ProcessInterface
{
    /**
     * The Symfony Process instance.
     *
     * @var \Symfony\Component\Process\Process
     */
    protected $process;
    
    public function __construct()
    {
//        $this->process = $process;
    }
    /**
     * Executes the given command.
     *
     * @param  string $command
     *
     * @return void
     */
    public function process($command)
    {   
        //$cmd = 'soffice --headless --convert-to html:HTML --outdir '.$file_destination.' '.$f ;
        $processStart = new Process($command);
        // $processStart->setWorkingDirectory(base_path());
        
        try {
            $processStart->mustRun();
            // $processStart->run();

           return $processStart->getOutput();
            
        } catch (ProcessFailedException $exception) {
            return $exception->getMessage();
        }
        
        //$this->process->setCommandLine($command);
        //$this->process->run();
    }
    /**
     * Returns errors which happened during the command execution.
     *
     * @return string|null
     */
    public function getErrors()
    {
        return $this->process->getErrorOutput();
    }
}
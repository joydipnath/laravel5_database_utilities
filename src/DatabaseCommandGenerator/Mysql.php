<?php

namespace Joydip\Laravel5_database_utilities\DatabaseCommandGenerator;

class Mysql extends AbstractDatabase
{
    /**
     * {@inheritdoc}
     */
    public function getBackupCommand()
    {
//        return sprintf('mysqldump --host=%s --port=%s --user=%s --password=%s %s > %s',
//            escapeshellarg($this->config('host')),
//            escapeshellarg($this->config('port')),
//            escapeshellarg($this->config('username')),
//            escapeshellarg($this->config('password')),
//            escapeshellarg($this->config('database')),
//            escapeshellarg($this->getTempPath())
//        );
        $mysql_config = config('database_manager.mysql');
//        return $mysql_config['driver'];
        return 'mysqldump --host='.$mysql_config['host'] .' --port='.$mysql_config['port'] .' --user='. $mysql_config['username'] .' --password='.$mysql_config['password'].' '. $mysql_config['database'] .'> '. $mysql_config['file_name'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function getRestoreCommand($file_path)
    {
        return sprintf('mysql --host=%s --port=%s --user=%s --password=%s %s -e "source %s"',
            escapeshellarg($this->config('host')),
            escapeshellarg($this->config('port')),
            escapeshellarg($this->config('username')),
            escapeshellarg($this->config('password')),
            escapeshellarg($this->config('database')),
            $file_path
        );
    }
}
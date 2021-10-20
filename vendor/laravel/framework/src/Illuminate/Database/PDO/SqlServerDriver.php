<?php

namespace Illuminate\Database\PDO;

use Doctrine\DBAL\Driver\AbstractSQLServerDriver;

class SqlServerDriver extends AbstractSQLServerDriver
{
<<<<<<< HEAD
    /**
     * @return \Doctrine\DBAL\Driver\Connection
     */
=======
>>>>>>> 4b7cf7360a7b81a06dad794700bbb884a8d64418
    public function connect(array $params)
    {
        return new SqlServerConnection(
            new Connection($params['pdo'])
        );
    }
}

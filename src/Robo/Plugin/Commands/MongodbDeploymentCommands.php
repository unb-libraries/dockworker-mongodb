<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\DockworkerDaemonCommands;

/**
 * Defines the commands used to interact with a local Mongodb application.
 */
class MongodbDeploymentCommands extends DockworkerDaemonCommands {

  /**
   * Provides log checker with ignored log exception items for local Mongodb.
   *
   * @hook on-event dockworker-logs-errors-exceptions
   *
   * @return mixed[]
   *   The error log exceptions.
   */
  public function getErrorLogExceptions() {
    return [
        [],
        array_values(
            [
                'Not a critical error 1' => 'Opening WiredTiger',
                'Not a critical error 2' => 'Received signal',
                'Not a critical error 3' => 'config.system.sessions does not exist',
                'Not a critical error 4' => 'Implicit TCP FastOpen unavailable',
            ]
        ),
    ];
  }

}

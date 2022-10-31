<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local Mongodb application.
 */
class MongodbLocalCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local Mongodb.
   *
   * @hook on-event dockworker-local-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [
        'config.system.sessions does not exist' => 'Not a critical error',
        'Received signal' => 'Not a critical error',
    ];
  }

}

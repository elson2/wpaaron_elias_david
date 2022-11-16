<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/elson2/wpaaron_elias_david.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('193.170.119.197')
    ->set('remote_user', 'aaron')
    ->set('port','5412')
    ->set('deploy_path', '~/sites/aaron-wp');

// Hooks

task('deploy', [
    'deploy:prepare',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');

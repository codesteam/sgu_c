# Setup node config
node_config = {
  'app_dir'         => '/path/to/sguc',
  'app_role_web'    => 'user@host',
  'app_env_options' => {
    'yii_debug' => 1,
    'yii_env'   => 'dev',
    'db_name'   => '',
    'db_user'   => '',
    'db_pass'   => '',
  },
}
set :node_config, node_config

# Setup web role
role :web, fetch(:node_config)['app_role_web']
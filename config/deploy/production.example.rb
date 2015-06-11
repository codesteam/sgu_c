# Setup node config
node_config = {
  'app_dir'         => '/home/sguc/sguc-core',
  'app_role_web'    => 'sguc@code-bit.com',
  'app_env_options' => {
    'yii_debug' => 1,
    'yii_env'   => 'dev',
    'db_name'   => 'sguc',
    'db_user'   => 'root',
    'db_pass'   => 'cj3fk8dgi',
  },
}
set :node_config, node_config

# Setup web role
role :web, fetch(:node_config)['app_role_web']
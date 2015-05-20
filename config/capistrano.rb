require File.expand_path(File.dirname(__FILE__))+'/capistrano_env'
require 'json'

set :application, 'SGUC'
set :repository,  'git@github.com:codesteam/sgu_c.git'
set :app_dir,     ENV_CONFIG['APP_DIR']

set :scm, :git
set :branch, 'master'
set :normalize_asset_timestamps, false

set :deploy_via, :remote_cache
set :keep_releases, 2

set :deploy_to, "#{app_dir}"
set :use_sudo, false
role :web, ENV_CONFIG['APP_ROLE_WEB']
role :app, ENV_CONFIG['APP_ROLE_APP']

after 'deploy:create_symlink' do
  # env config for app
  put "<?php \n return json_decode('#{ENV_CONFIG['APP_ENV_OPTIONS'].to_json}', 1);", "#{current_path}/config/env.php"

  # create shared forlders symlinks
  run "ln -nfs #{shared_path}/runtime #{current_path}/runtime"
  run "ln -nfs #{shared_path}/vendor  #{current_path}/vendor"
  run "ln -nfs #{shared_path}/assets  #{current_path}/web/assets"
  run "ln -nfs #{shared_path}/uploads #{current_path}/web/uploads"

  # install all vendors
  run "cd #{release_path} && composer install"

  # run YII migrations
  run "#{current_path}/yii migrate --interactive=0"
end

after 'deploy:update', 'deploy:cleanup'
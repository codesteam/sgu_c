require 'json'

# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'SGUC'
set :repo_url, 'git@github.com:codesteam/sgu_c.git'

# Default branch is :master
set :branch, 'master'

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, ->{ fetch(:node_config)['app_dir'] }

# Default value for :scm is :git
set :scm, :git

# Default value for linked_dirs is []
set :linked_dirs, %w{runtime vendor web/assets web/uploads}

# Default value for keep_releases is 5
set :keep_releases, 5

namespace :deploy do

  task :app_setup do
    on roles(:all) do
      # Env config for app
      env_php = "<?php \n return json_decode('#{fetch(:node_config)['app_env_options'].to_json}', 1);"
      upload! StringIO.new(env_php), "#{current_path}/config/env.php"
      execute "chmod 644 #{current_path}/config/env.php"
      execute "chmod 777 #{current_path}/web/assets_app/js/app"
      execute "chmod 777 #{current_path}/web/assets_app/js/app/controllers"

      # Install all vendors with composer
      execute "cd #{release_path} && composer install"

      # Run YII migrations
      execute "#{current_path}/yii migrate --interactive=0"
    end
  end

  after :finishing, 'deploy:app_setup'
  after :finishing, 'deploy:cleanup'

end

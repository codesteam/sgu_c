require 'json'

# config valid only for current version of Capistrano
lock '3.5.0'

set :application, 'SGUC'
set :repo_url, 'git@github.com:codesteam/sgu_c.git'
set :scm, :git
set :keep_releases, 5

# Git branch
set :branch, 'master'

# Deploy directory
set :deploy_to, ->{ fetch(:deploy_to) }

# Shared folders between all releases
set :linked_dirs, %w{runtime web/assets web/uploads magazines}
set :linked_files, %w[.env]

namespace :deploy do
  task :app_setup do
    on roles(:web) do
      # TODO: fix it use Yii2 assets
      execute "chmod -R 777 #{current_path}/web/assets_app"

      # Run YII migrations
      execute "#{current_path}/yii migrate --interactive=0"
    end
  end

  after :finishing, 'deploy:app_setup'
end

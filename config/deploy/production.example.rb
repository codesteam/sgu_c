# Server credentials
role :web, 'user@host'

# Deploy directory
set :deploy_to, '/path/to/sguc'

# Env variables
Capistrano::Env.use do |env|
  env.add 'DB_NAME', ''
  env.add 'DB_USER', ''
  env.add 'DB_PASS', ''
  env.filemode = 0644
end

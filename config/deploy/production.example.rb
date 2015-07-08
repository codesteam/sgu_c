# Server credentials
role :web, 'user@host'

# Deploy directory
set :deploy_to, '/path/to/sguc'

# Env variables
Capistrano::Env.use do |env|
  # Application
  env.add 'APP_KEY', ''

  # Mailer
  env.add 'MAILER_HOST', 'localhost'
  env.add 'MAILER_USER', 'username'
  env.add 'MAILER_PASS', 'password'
  env.add 'MAILER_PORT', '587'
  env.add 'MAILER_ENCRYPT', 'tls'
  env.add 'MAILER_FROM', 'example@example.com'

  # DB
  env.add 'DB_NAME', ''
  env.add 'DB_USER', ''
  env.add 'DB_PASS', ''
  env.filemode = 0644
end

set :application, "captcha_fix_capifony"
set :domain,      "10.30.0.4:30000"
set :deploy_to,   "/var/www/captcha_fix_capifony"
set :app_path,    "app"

set :repository,  "https://github.com/shudanti/symfony_fix_capifony.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set :deploy_via, :remote_cache
set  :keep_releases,  3
set :user, "root"
# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

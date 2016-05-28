set :application, "captcha_fix_capifony"
set :domain,      "captchacapifony.byethost3.com"
set :deploy_to,   "/var/www"
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
set :user, "le-ba-tien"
# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL
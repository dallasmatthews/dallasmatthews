DallasMatthews.co.uk
==============

This is the repo for our website.

We have a wordpress submodule installed so that Wordpress is in it's own directory and under different version control.

*To update Wordpress*
- ssh into the server (either dev or production - see usernames on Basecamp:https://basecamp.com/2638409/projects/6392030/documents/7037417)
- cd into wordpress
- `cd wordpress`
- `git fetch --tags`
- `git checkout 3.X`
- `cd ..`
- `git commit -m "Update WP to version 3.X"`

__Make sure you test the new version on the dev before doing it on the production__

*To upload local changes*

- Make your changes locally & commit them
- `git push` pushes the default branch (master)
- ssh into the production machine ( {username}@shell.gridhost.co.uk )
- cd into public_html
- `git pull github master` to pull in changes

__Don't forget, DB changes are not reflected! This is not Laravel.__

*More information here: http://efeqdev.com/website-development/this-is-how-we-version-control-and-deploy-our-wordpress-websites-with-git/*

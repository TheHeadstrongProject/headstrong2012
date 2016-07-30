# Headstrong Wordpress

### WP Engine

The website is hosted on WP Engine, which allows deployments via git.

More info about that [here](http://wpengine.com/git).

It will just deploy files that are in the repo, so files not here won't be touched.

If something was in the repo and is deleted, it WILL be deleted in the deploy.

After cloning this repo, you'll need to add your ssh public key via the WP Engine admin.

Then, you'll need to add the WP Engine remotes to your cloned repo:

    git remote add prod git@git.wpengine.com:production/headstrong2012.git
    git remote add stag git@git.wpengine.com:staging/headstrong2012.git

### Deploying master

To deploy the master branch to the remotes, you do a push to the remote, like so:

    git push staging master

Replace "staging" with "prod" to push to production.

### Deploying branches

Sometimes, you'll want to deploy a branch for testing. You should probably not need this for production, but it is useful for testing branches on staging.

    git push stag BRANCHNAME:master

That will push the "BRANCHNAME" branch to the master branch on the remote server.

### Rolling back a deployment

If you push master to production, only to find that there is a problem, it's best to just rollback. Then you can focus on fixing the problem without the pressure of it existing in production.

There are many ways to do this, but if you are planning on keeping the current code on master and only adding a fix, then the fastest way to deal with this will be to add a tag at the last commit that was known to be error-free, and deploy that tag. The steps for this are as follows:

Find the commit SHA of the last good commit:

    git log --pretty=oneline

Copy the SHA (the long alphanumeric string), and create a basic tag:

    git tag TAGNAME SHA

Deploy the tag (the ^{} is part of the command):

    # testing on staging first, then pushing to prod!
    git push staging TAGNAME^{}:master
    git push prod TAGNAME^{}:master

Once done, you can delete the tag to keep things clean:

    git tag -d TAGNAME

## Style Guide

https://make.wordpress.org/core/handbook/best-practices/

### Theme


### Version


### Plugins


### Setting up MAMP locally

https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP


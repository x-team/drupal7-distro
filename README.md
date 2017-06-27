Drupal7-Distro
===============

This is a demo drupal 7 project to get up and running quickly on drupal.

Getting Started
===============

* Clone X-Team [VDD](https://github.com/x-team/vdd) to your development folder on your machine. Follow the step to install vagrant and stop before doing your first 'vagrant up'.
* Make sure the config.json at the root of VDD has the following lines (drupal7 entry) :

~~~json
"sites": {
    "drupal7": {
      "account_name": "root",
      "account_pass": "root",
      "account_mail": "box@example.com",
      "site_name": "Drupal 7",
      "site_mail": "box@example.com"
    }
  }
~~~

* Go into the www folder : `cd www`
* Clone this project into the www folder : `git@github.com:x-team/drupal7-distro.git drupal7`
* Start your virtual machine : `vagrant up --provision`

You should now be able to access the following url : `http://vdd/drupal7/`

Maintained by the [developers at x-team](https://www.x-team.com) | [developer blog](https://www.x-team.com/blog/)

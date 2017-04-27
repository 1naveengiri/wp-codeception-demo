# Functional Testing with Codeception in WordPress
This repo consist of two Test Demo Implemented With codeception in WordPress.
 * **Automated WordPress login**
 * **Make Woocommerce order**
  
# How to proceed ?

### Install composer globally
Composer needs to be installed.

### Install selenium server and browser dependencies
* **Mac User** -  If you are Mac user. you can use `brew install` for selenium server
* **Non Mac** - For non Mac User you can follow this doc, Sorry :expressionless:
http://www.seleniumhq.org/download/

**For Browser dependencies you will have to install respective driver**
* `chromedriver` - https://github.com/mozilla/geckodriver/
* `firefox driver`-   https://sites.google.com/a/chromium.org/chromedriver/

### Update Composer
Clone this repository in root of WordPress.
and run `composer update`

### Start selenium server 
Start selenium server 
* **Mac User**  ->  `selenium-standalone start -- -port 4444`
* **NON Mac** -> google.com  :expressionless:

### Update acceptance.suite.yml files 
```
class_name: AcceptanceTester
modules:
    enabled:
        - \Helper\Acceptance
        - WPWebDriver
    config:
         WPWebDriver:
           url: 'http://acceptancedemo.dev'
           browser: firefox
           port: 4444
           host: 'localhost'
           wait: 2
           adminUsername: admin 
           adminPassword: admin
           adminPath: /wp-admin
           adminUrl: /wp-adminc
```
 Change 
 * `url` ->  URL of your Wordpress site.
 * `browser` -> change the browser in which you going to perform acceptance testing.
 * `port` -> Port on which selenium server is running.
 * `host` -> Your host Name.
 * `adminUsername` -> WordPress site admin Username.
 * `adminPassword` -> WordPres site admin Password.
 
 ### Build Acceptance Test
 Build Test by running command `vendor/bin/codecept build`
 You will get output like .... :sunglasses:
 ```
 Building Actor classes for suites: acceptance, functional, unit
 -> AcceptanceTesterActions.php generated successfully. 0 methods added
\AcceptanceTester includes modules: \Helper\Acceptance, WPWebDriver
 -> FunctionalTesterActions.php generated successfully. 0 methods added
\FunctionalTester includes modules: \Helper\Functional
 -> UnitTesterActions.php generated successfully. 0 methods added
\UnitTester includes modules: Asserts, \Helper\Unit
 ```
### Run Acceptance Test 
Run Test by running command `vendor/bin/codecept run acceptance`


If all ok and selenium server is running you will see the automated Test result on your specified browser.



<?php

use Facebook\WebDriver\Net\URLChecker;
use Facebook\WebDriver\WebDriverBy;

class NotConnectedTest extends FunctionalAbstractClass
{
    protected $baseUrl;

    /**
     * Method testNotConnected
     * @test
     */
    public function testNotConnected() {
        $checker = new URLChecker();
        $checker->waitUntilAvailable(1500, $this->baseUrl . '/');
        parent::$webDriver->get($this->baseUrl . "/");
        // verifyElementPresent | link=Accueil |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Accueil")) != null);

        // verifyElementPresent | link=Connexion |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Connexion")) != null);

        // click | link=Connexion |
        parent::$webDriver->findElement(WebDriverBy::linkText("Connexion"))->click();
        // verifyElementPresent | id=LoginForm_username |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LoginForm_username")) != null);

        // verifyElementPresent | id=LoginForm_password |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LoginForm_password")) != null);

        // verifyElementPresent | id=yt1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("yt1")) != null);

        // click | id=yt1 |
        parent::$webDriver->findElement(WebDriverBy::id("yt1"))->click();
        // verifyElementPresent | id=User_prenom |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_prenom")) != null);

        // verifyElementPresent | id=User_nom |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_nom")) != null);

        // verifyElementPresent | id=User_login |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_login")) != null);

        // verifyElementPresent | id=User_password |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_password")) != null);

        // verifyElementPresent | id=User_email |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_email")) != null);

        // verifyElementPresent | id=User_telephone |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_telephone")) != null);

        // verifyElementPresent | id=User_gsm |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_gsm")) != null);

        // verifyElementPresent | id=User_verifyCode |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("User_verifyCode")) != null);

        // verifyElementPresent | name=yt0 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::name("yt0")) != null);

        // selectWindow | null |
        // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | null | ]]
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // assertElementPresent | css=div.flash-error |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("div.flash-error")) != null);
        // assertElementPresent | css=div.errorMessage |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("div.errorMessage")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr/td[2]/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr/td[2]/div")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr[2]/td/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr[2]/td/div")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr[2]/td[2]/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr[2]/td[2]/div")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr[3]/td/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr[3]/td/div")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr[4]/td[2]/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr[4]/td[2]/div")) != null);
        // assertElementPresent | //form[@id='user-form']/table/tbody/tr[5]/td/div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::xpath("//form[@id='user-form']/table/tbody/tr[5]/td/div")) != null);
        // click | link=Connexion |
        parent::$webDriver->findElement(WebDriverBy::linkText("Connexion"))->click();
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // assertElementPresent | id=LoginForm_username_em_ |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LoginForm_username_em_")) != null);
        // assertElementPresent | id=LoginForm_password_em_ |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LoginForm_password_em_")) != null);
    }

}
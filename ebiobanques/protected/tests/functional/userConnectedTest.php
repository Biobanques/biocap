<?php

use Facebook\WebDriver\Net\URLChecker;
use Facebook\WebDriver\WebDriverBy;

class UserConnectedTest extends FunctionalAbstractClass
{
    protected $baseUrl;

    /**
     * Method testUserConnected
     * @test
     */
    public function testUserConnected() {
        $checker = new URLChecker();
        $checker->waitUntilAvailable(1500, $this->baseUrl . '/');
        parent::$webDriver->get($this->baseUrl . "/");
        // click | link=Connexion |
        parent::$webDriver->findElement(WebDriverBy::linkText("Connexion"))->click();
        // type | id=LoginForm_username | user
        parent::$webDriver->findElement(WebDriverBy::id("LoginForm_username"))->sendKeys("user");
        // type | id=LoginForm_password | user
        parent::$webDriver->findElement(WebDriverBy::id("LoginForm_password"))->sendKeys("user");
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // click | link=Rechercher des échantillons |
        parent::$webDriver->findElement(WebDriverBy::linkText("Rechercher des échantillons"))->click();
        // assertElementPresent | link=Rechercher des échantillons |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Rechercher des échantillons")) != null);
        // assertElementPresent | link=Déconnexion (user) |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Déconnexion (user)")) != null);
        // click | link=Rechercher des échantillons |
        parent::$webDriver->findElement(WebDriverBy::linkText("Rechercher des échantillons"))->click();

        // assertElementPresent | id=SwitchLinkLF |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("SwitchLinkLF")) != null);
        // assertElementPresent | css=#light_search-form > div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("#light_search-form > div")) != null);
        // select | id=BiocapForm_iccc_group1 | label=IV. Tumeurs du système nerveux sympathique
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=#BiocapForm_iccc_group1 > option[value="IV. Tumeurs du système nerveux sympathique"] |

        parent::$webDriver->findElement(WebDriverBy::id("SwitchLinkLF"))->click();
        //$selectListElement->click();
        $selectList = new Facebook\WebDriver\WebDriverSelect(parent::$webDriver->findElement(WebDriverBy::cssSelector("#BiocapForm_iccc_group1")));


        $selectList->selectByValue("04. Tumeurs du système nerveux sympathique");
        //parent::$webDriver->findElement(WebDriverBy::cssSelector("#BiocapForm_iccc_group1"))->selectByValue("04. Tumeurs du système nerveux sympathique");
//        parent::$webDriver->findElement(WebDriverBy::cssSelector("#BiocapForm_iccc_group1 option[value=\"04. Tumeurs du système nerveux sympathique\"]"))->click();
        // assertElementPresent | id=BiocapForm_iccc_sousgroup1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("BiocapForm_iccc_sousgroup1")) != null);
        // assertElementPresent | id=BiocapForm_iccc_group2 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("BiocapForm_iccc_group2")) != null);
        // select | id=BiocapForm_iccc_group2 | label=IX. Sarcomes des tissus mous et extra-osseux
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=#BiocapForm_iccc_group2 > option[value="IX. Sarcomes des tissus mous et extra-osseux"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("#BiocapForm_iccc_group2 > option[value=\"09. Sarcomes des tissus mous et extra-osseux\"]"))->click();
        // assertElementPresent | id=BiocapForm_iccc_sousgroup2 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("BiocapForm_iccc_sousgroup2")) != null);
        // assertElementPresent | id=BiocapForm_iccc_group3 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("BiocapForm_iccc_group3")) != null);
        // select | id=BiocapForm_iccc_group3 | label=VI. Tumeurs rénales
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=#BiocapForm_iccc_group3 > option[value="VI. Tumeurs rénales"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("#BiocapForm_iccc_group3 > option[value=\"06. Tumeurs rénales\"]"))->click();
        // assertElementPresent | id=BiocapForm_iccc_sousgroup3 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("BiocapForm_iccc_sousgroup3")) != null);
        // click | name=yt1 |
        parent::$webDriver->findElement(WebDriverBy::name("yt1"))->click();
        // select | id=BiocapForm_mode_request | label=Patients qui ont des échantillons tumoraux ET non tumoraux
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | name=yt1 |
        parent::$webDriver->findElement(WebDriverBy::name("yt1"))->click();

        // click | id=SwitchLinkAF |
        parent::$webDriver->findElement(WebDriverBy::id("SwitchLinkAF"))->click();
        // select | id=LightBiocapForm_iccc_group1 | label=II. Lymphomes et néoplasmes réticulo-endothéliaux
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=option[value="II. Lymphomes et néoplasmes réticulo-endothéliaux"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("option[value=\"02. Lymphomes et néoplasmes réticulo-endothéliaux\"]"))->click();
        // assertElementPresent | id=LightBiocapForm_iccc_sousgroup1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LightBiocapForm_iccc_sousgroup1")) != null);
        // select | id=LightBiocapForm_iccc_group2 | label=II. Lymphomes et néoplasmes réticulo-endothéliaux
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=#LightBiocapForm_iccc_group2 > option[value="II. Lymphomes et néoplasmes réticulo-endothéliaux"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("#LightBiocapForm_iccc_group2 > option[value=\"02. Lymphomes et néoplasmes réticulo-endothéliaux\"]"))->click();
        // assertElementPresent | id=LightBiocapForm_iccc_sousgroup2 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("LightBiocapForm_iccc_sousgroup2")) != null);
        // select | id=LightBiocapForm_iccc_group3 | label=VII. Tumeurs hépatiques
        // ERROR: Caught exception [TypeError: value.replace is not a function]
        // click | css=#LightBiocapForm_iccc_group3 > option[value="VII. Tumeurs hépatiques"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("#LightBiocapForm_iccc_group3 > option[value=\"07. Tumeurs hépatiques\"]"))->click();
        // assertElementPresent | id=result-grid |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("result-grid")) != null);
        // click | id=LightBiocapForm_age_10-14 |
        parent::$webDriver->findElement(WebDriverBy::id("LightBiocapForm_age_10-14"))->click();
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // click | id=LightBiocapForm_age_2-4 |
        parent::$webDriver->findElement(WebDriverBy::id("LightBiocapForm_age_2-4"))->click();
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // click | link=Déconnexion (user) |
        parent::$webDriver->findElement(WebDriverBy::linkText("Déconnexion (user)"))->click();
    }

}
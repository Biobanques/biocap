<?php

use Facebook\WebDriver\Net\URLChecker;
use Facebook\WebDriver\WebDriverBy;

class AdminConnectedTest extends FunctionalAbstractClass
{
    protected $baseUrl;

    /**
     * Method testAdminConnected
     * @test
     */
    public function testAdminConnected() {
        $checker = new URLChecker();
        $checker->waitUntilAvailable(1500, $this->baseUrl . '/');
        parent::$webDriver->get($this->baseUrl . "/");
        // click | link=Connexion |
        parent::$webDriver->findElement(WebDriverBy::linkText("Connexion"))->click();
        // type | id=LoginForm_password | adm_BCApp
        parent::$webDriver->findElement(WebDriverBy::id("LoginForm_password"))->sendKeys("admPwd");
        // type | id=LoginForm_username | admin
        parent::$webDriver->findElement(WebDriverBy::id("LoginForm_username"))->sendKeys("adminTest");
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // assertElementPresent | link=Rechercher des échantillons |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Rechercher des échantillons")) != null);
        // assertElementPresent | link=Administration |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Administration")) != null);
        // assertElementPresent | link=Déconnexion (admin) |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Déconnexion (adminTest)")) != null);
        // click | link=Administration |
        parent::$webDriver->findElement(WebDriverBy::linkText("Administration"))->click();
        // assertElementPresent | link=Utilisateurs |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Utilisateurs")) != null);
        // assertElementPresent | link=Logs système |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Logs système")) != null);
        // click | link=Utilisateurs |
        parent::$webDriver->findElement(WebDriverBy::linkText("Utilisateurs"))->click();
        // assertElementPresent | link=Recherche avancée |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Recherche avancée")) != null);
        // assertElementPresent | link=Créer un utilisateur |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Créer un utilisateur")) != null);
        // assertElementPresent | link=Désactiver |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Désactiver")) != null);
        // assertElementPresent | css=tr.even > td.button-column > a.view > img[alt="Voir"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("tr.even > td.button-column > a.view > img[alt=\"Voir\"]")) != null);
        // assertElementPresent | css=img[alt="Mettre à jour"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"Mettre à jour\"]")) != null);
        // assertElementPresent | css=img[alt="Supprimer"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"Supprimer\"]")) != null);
        // click | link=Logs système |
        parent::$webDriver->findElement(WebDriverBy::linkText("Logs système"))->click();
        // assertText | css=h1 | Suivi des actions sur la base
        $this->assertEquals("Suivi des actions sur la base", parent::$webDriver->findElement(WebDriverBy::cssSelector("h1"))->getText());
        // selectWindow | null |
        // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | null | ]]
        // click | link=Echantillons |
        parent::$webDriver->findElement(WebDriverBy::linkText("Echantillons"))->click();
        // verifyText | css=h1 | Administration des échantillons
        $this->assertEquals("Administration des échantillons", parent::$webDriver->findElement(WebDriverBy::cssSelector("h1"))->getText());

        // assertElementPresent | link=Recherche avancée |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::linkText("Recherche avancée")) != null);
        // click | link=Recherche avancée |
        parent::$webDriver->findElement(WebDriverBy::linkText("Recherche avancée"))->click();
        // assertElementPresent | name=yt0 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::name("yt0")) != null);
        // assertElementPresent | css=img[alt="Voir"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"Voir\"]")) != null);
        // assertElementPresent | css=img[alt="Mettre à jour"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"Mettre à jour\"]")) != null);
        // assertElementPresent | css=img[alt="Supprimer"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"Supprimer\"]")) != null);
        // click | css=img[alt="Voir"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("img[alt=\"Voir\"]"))->click();
        // assertElementPresent | css=h1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("h1")) != null);
        // click | link=Echantillons |
        parent::$webDriver->findElement(WebDriverBy::linkText("Echantillons"))->click();
        // click | css=img[alt="Mettre à jour"] |
        parent::$webDriver->findElement(WebDriverBy::cssSelector("img[alt=\"Mettre à jour\"]"))->click();
        // assertElementPresent | css=h1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("h1")) != null);
        // click | name=yt0 |
        parent::$webDriver->findElement(WebDriverBy::name("yt0"))->click();
        // assertElementPresent | css=div.flash-success |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("div.flash-success")) != null);
        // assertElementPresent | css=h1 |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("h1")) != null);
        // click | link=Rechercher des échantillons |
        parent::$webDriver->findElement(WebDriverBy::linkText("Rechercher des échantillons"))->click();
        // assertElementPresent | id=SwitchLinkLF |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("SwitchLinkLF")) != null);
        // assertElementPresent | css=#light_search-form > div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("#light_search-form > div")) != null);
        // assertElementPresent | id=result-grid |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("result-grid")) != null);
        // click | id=SwitchLinkLF |
        parent::$webDriver->findElement(WebDriverBy::id("SwitchLinkLF"))->click();
        // assertElementPresent | id=SwitchLinkAF |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("SwitchLinkAF")) != null);
        // assertElementPresent | css=#light_search-form > div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("#light_search-form > div")) != null);
        // assertElementPresent | css=#light_search-form > div |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("#light_search-form > div")) != null);
        // assertElementPresent | id=result-grid |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::id("result-grid")) != null);
        // assertElementPresent | css=img[alt="View"] |
        $this->assertTrue(parent::$webDriver->findElements(WebDriverBy::cssSelector("img[alt=\"View\"]")) != null);
        // click | link=Déconnexion (admin) |
        parent::$webDriver->findElement(WebDriverBy::linkText("Déconnexion (adminTest)"))->click();
    }

}